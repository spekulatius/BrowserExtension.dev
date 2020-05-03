---
title: How to add TailwindCSS to Kocal/Vue-Web-Extension
date: 2020-05-03
---

[Kocal](https://hugo.alliau.me/) is building a well structured [Vue boilerplate](https://github.com/Kocal/vue-web-extension) to build browser extension on. It's coming with separate Vue instances for the popup as well as the options.

In the following article I'll explain the steps to start a new project based of the boilerplate and add the popular framework [TailwindCSS](https://tailwindcss.com) to the project.

## Starting a new Vue Extension Project




## Adding TailwindCSS to the Project

The following steps explain how to add TailwindCSS to your new extension project:

1. Install Tailwind as well as the PostCSS loader:

    ```yarn tailwindcss postcss-loader @fullhuman/postcss-purgecss --dev```

    This will add the dependencies to your package.json file.

2. Create a file for the Tailwind configuration called `tailwind.config.js`:

    ```
    module.exports = {
      theme: {
        extend: {},
      },
      variants: {},
      plugins: [],
    }
    ```

3. Create a file called `postcss.config.js` for your PostCSS configuration:

   ```JS
   /* eslint-disable import/no-extraneous-dependencies */

   const tailwindcss = require('tailwindcss')

   const purgecss = require('@fullhuman/postcss-purgecss')({
     // Specify the paths to all of the template files in your project
     content: ['./src/**/*.vue'],

     // Include any special characters you're using in this regular expression
     defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],

     extractors: [
       // https://purgecss.com/guides/vue.html
       {
         extensions: ['vue'],
         extractor(content) {
           const contentWithoutStyleBlocks = content.replace(/<style[^]+?<\/style>/gi, '')
           return contentWithoutStyleBlocks.match(/[A-Za-z0-9-_/:]*[A-Za-z0-9-_/]+/g) || []
         }
       }
     ],

     whitelist: [],
     whitelistPatterns: [
       /-(leave|enter|appear)(|-(to|from|active))$/, // transitions
       /data-v-.*/ // scoped css
     ]
   })

   module.exports = {
     plugins: [tailwindcss(), ...(process.env.NODE_ENV === 'production' ? [purgecss] : [])]
   }
   ```

4. You can import the Tailwind directives in your `popup/App.vue` and `options/App.vue` in the `<style>` block:

```Vue
<style>
@tailwind base;
@tailwind components;
@tailwind utilities;
</style>
```

These will automatically compiled during the build processes.