import{a as _,e as p}from"./index.4776f7d5.js";import{B as m}from"./Textarea.2db5f910.js";import{C as c}from"./Blur.404d53ce.js";import{C as l}from"./SettingsRow.8a127375.js";import{C as u}from"./Index.7823cadd.js";import{n}from"./vueComponentNormalizer.58b0a173.js";import{B as d}from"./RadioToggle.18d51233.js";var h=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-custom-fields lite"},[s("core-blur",[s("core-settings-row",{attrs:{name:t.strings.customFields,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-textarea",{attrs:{"min-height":200}}),s("div",{staticClass:"aioseo-description"},[t._v(" "+t._s(t.strings.customFieldsDescription)+" ")])]},proxy:!0}])})],1),s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("custom-fields","custom-fields-upsell",`${t.object.name}-post-type`),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("custom-fields",t.object.name,"home")},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}])})],1)},y=[];const f={components:{BaseTextarea:m,CoreBlur:c,CoreSettingsRow:l,Cta:u},props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data(){return{strings:{customFields:this.$t.__("Custom Fields",this.$td),customFieldsDescription:this.$t.__("List of custom field names to include in the SEO Page Analysis. Add one per line.",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s gives you advanced customizations for our page analysis feature, letting you add custom fields to analyze.",this.$td),"AIOSEO","Pro"),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Custom Fields",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Custom Fields are only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")}}},computed:{..._(["options"])},methods:{getSchemaTypeOption(t){return this.schemaTypes.find(e=>e.value===t)}}},r={};var $=n(f,h,y,!1,g,null,null,null);function g(t){for(let e in r)this[e]=r[e]}const R=function(){return $.exports}();var v=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-schema-lite"},[s("core-blur",[s("core-settings-row",{attrs:{name:t.strings.schemaType,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-select",{staticClass:"schema-type",attrs:{size:"medium",options:t.schemaTypes,value:t.getSchemaTypeOption("Article")}})]},proxy:!0}])}),s("core-settings-row",{attrs:{name:t.strings.articleType,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{name:`${t.object.name}articleType`,value:"BlogPosting",options:[{label:t.strings.article,value:"Article"},{label:t.strings.blogPost,value:"BlogPosting"},{label:t.strings.newsArticle,value:"NewsArticle"}]}})]},proxy:!0}])})],1),s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("schema-markup","schema-markup-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("schema-markup",null,"home"),"feature-list":t.features},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}])})],1)},b=[];const x={components:{BaseRadioToggle:d,CoreBlur:c,CoreSettingsRow:l,Cta:u},props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data(){return{schemaTypes:[{value:"none",label:this.$t.__("None",this.$td)},{value:"Article",label:this.$t.__("Article",this.$td)}],strings:{schemaType:this.$t.__("Schema Type",this.$td),articleType:this.$t.__("Article Type",this.$td),article:this.$t.__("Article",this.$td),blogPost:this.$t.__("Blog Post",this.$td),newsArticle:this.$t.__("News Article",this.$td),ctaDescription:this.$t.__("Easily generate unlimited schema markup for your content to help you rank higher in search results. Our schema validator ensures your schema works out of the box.",this.$tdPro),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Schema Generator",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Schema Generator is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")},features:[this.$t.__("Unlimited Schema",this.$td),this.$t.__("Validate with Google",this.$td),this.$t.__("Increase Rankings",this.$td),this.$t.__("Additional Schema Types",this.$td)]}},methods:{getSchemaTypeOption(t){return this.schemaTypes.find(e=>e.value===t)}}},o={};var S=n(x,v,b,!1,k,null,null,null);function k(t){for(let e in o)this[e]=o[e]}const i=function(){return S.exports}();var T=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-schema-view"},[t.isUnlicensed?t._e():s("schema",{attrs:{type:t.type,object:t.object,options:t.options,"show-bulk":t.showBulk}}),t.isUnlicensed?s("schema-lite",{attrs:{type:t.type,object:t.object,options:t.options,"show-bulk":t.showBulk}}):t._e()],1)},A=[];const C={components:{Schema:i,SchemaLite:i},props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean},computed:{...p(["isUnlicensed"])}},a={};var j=n(C,T,A,!1,w,null,null,null);function w(t){for(let e in a)this[e]=a[e]}const D=function(){return j.exports}();export{R as C,D as S};
