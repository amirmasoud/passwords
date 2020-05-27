export const state = () => ({
  locale: process.env.appLocale,
  locales: {
    en: 'EN',
    'zh-CN': '中文',
    fa: 'FA'
  }
})

export const mutations = {
  set(state, locale) {
    console.log(state, locale)
  }
}

// // getters
// export const getters = {
//   locale: state => state.locale,
//   locales: state => state.locales
// }

// // mutations
// export const mutations = {
//   SET_LOCALE (state, { locale }) {
//     state.locale = locale
//   }
// }

// // actions
// export const actions = {
//   setLocale ({ commit }, { locale }) {
//     commit('SET_LOCALE', { locale })

//     Cookies.set('locale', locale, { expires: 365 })
//   }
// }