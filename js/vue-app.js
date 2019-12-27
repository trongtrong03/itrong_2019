var wrap = new Vue({
    el: '#wrap',
    components: {
        'v-header': httpVueLoader('js/components/TheHeader.vue'),
        'v-footer': httpVueLoader('js/components/TheFooter.vue'),
        'v-ihead': httpVueLoader('js/components/TheInsideHead.vue'),
        'v-html': httpVueLoader('js/components/TheTempleteHtml.vue'),
        'v-haml': httpVueLoader('js/components/TheTempleteHaml.vue'),
        'v-svg': httpVueLoader('js/components/TheTempleteSVG.vue'),
        'v-css': httpVueLoader('js/components/TheTempleteCSS.vue'),
        'v-css-sass': httpVueLoader('js/components/TheTempleteSass.vue'),
        'v-css-compass': httpVueLoader('js/components/TheTempleteCompass.vue'),
        'v-jquery': httpVueLoader('js/components/TheTempleteJQ.vue'),
        'v-canvas': httpVueLoader('js/components/TheTempleteCanvas.vue'),
        'v-gulp': httpVueLoader('js/components/TheTempleteGulp.vue'),
        'v-code-editor': httpVueLoader('js/components/TheTempleteEditor.vue'),
        'v-git': httpVueLoader('js/components/TheTempleteGit.vue'),
        'v-os': httpVueLoader('js/components/TheTempleteOS.vue'),
        'v-webtool': httpVueLoader('js/components/TheTempleteWebtool.vue'),
        'v-software': httpVueLoader('js/components/TheTempleteSoftware.vue'),
        'v-resource': httpVueLoader('js/components/TheTempleteRes.vue'),
        'v-knowledge': httpVueLoader('js/components/TheTempleteKL.vue'),
    },
    data: {
        isActive: false,
    }
})