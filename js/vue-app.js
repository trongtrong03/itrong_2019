var wrap = new Vue({
    el: '#wrap',
    components: {
        'v-header': httpVueLoader('js/components/TheHeader.vue'),
        'v-footer': httpVueLoader('js/components/TheFooter.vue'),
        'v-ihead': httpVueLoader('js/components/TheInsideHead.vue'),
        'v-html-list': httpVueLoader('js/components/TheTempleteHtml_1.vue'),
        'v-html-tips': httpVueLoader('js/components/TheTempleteHtmlTips.vue'),
        'v-svg': httpVueLoader('js/components/TheTempleteSVG.vue'),
        'v-css-list': httpVueLoader('js/components/TheTempleteCSS_1.vue'),
        'v-css-selector': httpVueLoader('js/components/TheTempleteCSS_2.vue'),
        'v-css-tips': httpVueLoader('js/components/TheTempleteCSSTips.vue'),
        'v-jquery': httpVueLoader('js/components/TheTempleteJQ.vue'),
        'v-webtool': httpVueLoader('js/components/TheTempleteWebtool.vue'),
        'v-software': httpVueLoader('js/components/TheTempleteSoftware.vue'),
        'v-resource': httpVueLoader('js/components/TheTempleteRes.vue'),
    },
    data: {
        isActive: false,
    }
})