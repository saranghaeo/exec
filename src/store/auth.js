import { defineStore } from 'pinia'
import axios from 'axios'
import { createClient } from '@supabase/supabase-js'

const supabase = createClient('https://pidnrnvitkiyqsmequnz.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBpZG5ybnZpdGtpeXFzbWVxdW56Iiwicm9sZSI6ImFub24iLCJpYXQiOjE2ODMwMTQxNDksImV4cCI6MTk5ODU5MDE0OX0.zRLyXkGzAXFAjS-Pi0Nj8AX5BWKsBjbXxgwm0hEvQps')

export const useAuthStore = defineStore('auth', {
  state: () => ({
    user: null
  }),
  actions: {
    async login() {
      // Define the return URL for the Steam login flow

      /**
       * I think, this could be moved to / or /profile,
       * I see no reason to use auth/steam
       */
      const returnUrl = window.location.origin + '/auth/steam'

      // Redirect the user to the Steam login page
      window.location.href = `https://steamcommunity.com/openid/login?` +
        `openid.claimed_id=http://specs.openid.net/auth/2.0/identifier_select&` +
        `openid.identity=http://specs.openid.net/auth/2.0/identifier_select&` +
        `openid.mode=checkid_setup&` +
        `openid.ns=http://specs.openid.net/auth/2.0&` +
        `openid.realm=${window.location.origin}&` +
        `openid.return_to=${encodeURIComponent(returnUrl)}`
    },

    async handleLoginCallback() {
      console.log('called')
      // Parse the query parameters from the URL
      const queryParams = new URLSearchParams(window.location.search)

      // Steam Web API Key
      const key = "3C8BC55894A1626EE197FA366150D8B0";

      // Params to auth request to Steam
      const ns = "http://specs.openid.net/auth/2.0"
      const mode = "check_authentication"
      const endpoint = queryParams.get('openid.op_endpoint')
      const claimedId = queryParams.get('openid.claimed_id')
      const steamid = queryParams.get('openid.claimed_id').replace(/^.*\//, '')
      const identity = queryParams.get('openid.identity')
      const returnTo = queryParams.get('openid.return_to')
      const responseNonce = queryParams.get('openid.response_nonce')
      const assocHandle = queryParams.get('openid.assoc_handle')
      const signed = queryParams.get('openid.signed')
      const signature = queryParams.get('openid.sig')

      const response = axios.get("https://steamcommunity.com/openid/login?", {
        params: {
          'openid.ns': decodeURIComponent(ns),
          'openid.mode': mode,
          'openid.op_endpoint': endpoint,
          'openid.claimed_id': claimedId,
          'openid.identity': identity,
          'openid.return_to': returnTo,
          'openid.response_nonce': responseNonce,
          'openid.assoc_handle': assocHandle,
          'openid.signed': signed,
          'openid.sig': signature,
        },
        headers: {
          'Content-Type': 'text/plain'
        }
      }).then(() => {
        /**
         * This should happen only if user is authed, is_valid == true in response
         */
        return axios.get("https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v2/?key=" + key + '&steamids=' + steamid)
      })

      const user = (await response).data.response.players[0]

      console.log(user)

      // Store the user object in state
      user.profileurl = 'https://steamcommunity.com/profiles/' + user.steamid
      this.user = user

      await this.saveUserDataToSupabase(user)
    },

    logout() {
      // Clear the user object from state
      this.user = null
    },
    async saveUserDataToSupabase(user) {
      const { data, error } = await supabase
        .from('users')
        .insert([
          {
            steam_id: user.steamid,
            personaname: user.personaname,
            profileurl: user.profileurl,
            avatarfull: user.avatarfull
          }
        ])

      if (error) {
        console.error(error)
      } else {
        console.log(data)
      }
    }
  }
})
