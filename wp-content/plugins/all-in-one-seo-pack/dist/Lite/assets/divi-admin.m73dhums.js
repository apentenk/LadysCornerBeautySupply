import{v as a,o as i,c,C as l,Y as u}from"./js/runtime-dom.esm-bundler.h3clfjuw.js";import{l as p}from"./js/index.nd8elblc.js";import{l as m}from"./js/index.h076fivy.js";import{l as d}from"./js/index.moogjen0.js";import{u as f,l as _}from"./js/index.nsvc8vqf.js";import{C as A}from"./js/Caret.hnvbzqgq.js";import"./js/translations.lf9cwm9a.js";import{_ as b}from"./js/_plugin-vue_export-helper.oebm7xum.js";import{a as y,_ as h}from"./js/default-i18n.hohxoesu.js";import"./js/helpers.fdpg7vgg.js";const g="all-in-one-seo-pack",S={setup(){return{rootStore:f()}},components:{CoreAlert:A},data(){return{strings:{alert:y(h("The options below are disabled because you are using %1$s to manage your SEO. They can be changed in the %2$sSearch Appearance menu%3$s.",g),"All in One SEO",`<a href="${this.rootStore.aioseo.urls.aio.searchAppearance}" target="_blank">`,"</a>")}}}},v={class:"aioseo-divi-seo-admin-notice-container"};function w(o,t,n,e,r,C){const s=a("core-alert");return i(),c("div",v,[l(s,{innerHTML:r.strings.alert},null,8,["innerHTML"])])}const x=b(S,[["render",w]]),E=()=>{const o=document.querySelectorAll("#wrap-seo .et-tab-content");for(let t=0;t<o.length;t++){const n=document.createElement("div");n.setAttribute("id",`aioseo-divi-seo-admin-notice-container-${t}`),o[t].insertBefore(n,o[t].firstChild);let e=u({...x,name:"Standalone/DiviAdmin"});e=p(e),e=m(e),e=d(e),_(e),e.mount(`#${n.getAttribute("id")}`)}},$=()=>{const o=document.querySelectorAll('#wrap-seo input[type="text"], #wrap-seo textarea');for(const e of o)e.style.pointerEvents="none",e.setAttribute("readonly",!0);const t=document.querySelectorAll("#wrap-seo select");for(const e of t)e.style.pointerEvents="none",e.setAttribute("disabled",!0);const n=document.querySelectorAll("#wrap-seo .et-checkbox");for(const e of n)e.setAttribute("disabled",!0),e.nextElementSibling.style.pointerEvents="none"},k=()=>{const o=window.aioseo.urls.aio.searchAppearance,t=document.querySelector('a[href="#wrap-seo"]');if(!o||!t)return;const n=t.cloneNode(!0);n.setAttribute("href",o),t.parentNode.replaceChild(n,t)};window.addEventListener("load",()=>{E(),$(),k()});
