import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'
import mkcert from 'vite-plugin-mkcert'

export default defineConfig({
  server: {
    https: true
  },
  plugins: [
    mkcert(),
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/alpine.js'
      ],
      refresh: [
        ...refreshPaths,
        'app/Http/Livewire/**'
      ]
    })
  ]
})
