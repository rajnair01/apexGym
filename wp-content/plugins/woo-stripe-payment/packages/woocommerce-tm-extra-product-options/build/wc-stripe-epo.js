(()=>{var t={713:t=>{t.exports=function(t,e,r){return e in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}},318:t=>{t.exports=function(t){return t&&t.__esModule?t:{default:t}}},567:t=>{"use strict";t.exports=window.jQuery},707:t=>{"use strict";t.exports=window.wc_stripe}},e={};function r(c){var n=e[c];if(void 0!==n)return n.exports;var o=e[c]={exports:{}};return t[c](o,o.exports,r),o.exports}(()=>{var t=r(318),e=t(r(713)),c=t(r(567)),n=r(707);function o(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var c=Object.getOwnPropertySymbols(t);e&&(c=c.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,c)}return r}function a(t){for(var r=1;r<arguments.length;r++){var c=null!=arguments[r]?arguments[r]:{};r%2?o(Object(c),!0).forEach((function(r){(0,e.default)(t,r,c[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(c)):o(Object(c)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(c,e))}))}return t}var u=function(t){n.product_gateways.forEach((function(t){t.maybe_calculate_cart&&t.maybe_calculate_cart()}))};(0,c.default)((function(){n.product_gateways.length&&(n.product_gateways.forEach((function(t){var r=t.get_add_to_cart_data;t.get_add_to_cart_data=function(){return a(a({},r.call(t)),(0,c.default)("form.cart .tmcp-field").serializeArray().reduce((function(t,r){return a(a({},t),{},(0,e.default)({},r.name,r.value))}),{}))}})),(0,c.default)(document.body).on("change","form.cart .tmcp-field",u))}))})(),(this.wc_stripe=this.wc_stripe||{})["wc-stripe-epo"]={}})();
//# sourceMappingURL=wc-stripe-epo.js.map