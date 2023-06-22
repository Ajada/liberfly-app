const { defineConfig } = require('@vue/cli-service')

module.exports = defineConfig({
  transpileDependencies: true,
  lintOnSave: true,
  outputDir: 'app',
  pwa: {
    name: 'Liberfly',
    short_name: 'Liberfly',
    themeColor: '#fff',
    manifestOptions: {
      background_color: '#fff',
      icons: [
        {
          src: './img/favicons/android-chrome-144x144.png',
          sizes: '144x144',
          type: 'image/png'
        },
        {
          src: './img/favicons/mstile-150x150.png',
          sizes: '150x150',
          type: 'image/png'
        },
        {
          src: './img/favicons/apple-touch-icon.png',
          sizes: '168x168',
          type: 'image/png'
        },
        {
          src: './img/favicons/favicon-32x32.png',
          sizes: '32x32',
          type: 'image/png'
        },
        {
          src: './img/favicons/favicon-16x16.png',
          sizes: '16x16',
          type: 'image/png'
        }
      ]
    },
    iconPaths: {
      favicon32: 'img/favicons/favicon-32x32.png',
      favicon16: 'img/favicons/favicon-16x16.png',
      appleTouchIcon: 'img/icons/apple-touch-icon.png'
    },
    workboxOptions: {
      exclude: ['.htaccess'],
      runtimeCaching: [
        {
          urlPattern: ({ url }) => url.pathname === '/',
          method: 'GET',
          handler: 'StaleWhileRevalidate',
          options: {
            cacheName: 'newVersionCached'
          }
        },
        {
          urlPattern: ({ url }) => url.pathname === '/',
          method: 'POST',
          handler: 'NetworkOnly',
          options: {
            backgroundSync: {
              name: 'solCached'
            }
          }
        }
      ]
    }
  }
})
