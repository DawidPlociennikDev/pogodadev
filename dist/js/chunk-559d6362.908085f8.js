(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-559d6362"],{"9d5a":function(t,a,d){"use strict";var r=d("b198"),e=d.n(r);e.a},b198:function(t,a,d){},fd3f:function(t,a,d){"use strict";d.r(a);var r=function(){var t=this,a=t.$createElement,d=t._self._c||a;return d("mdb-container",[d("mdb-row",t._l(t.blogs,(function(a){return d("mdb-col",{key:a.id,staticClass:"mx-auto mt-4",attrs:{sm:"4",lg:"6"}},[d("mdb-card",{staticClass:"card-image h-100 air_bg"},[d("div",{staticClass:"text-white h-100 text-center d-flex align-items-center rgba-black-strong py-5 px-4 h-100"},[d("div",[d("div",{staticClass:"card_header"},[d("mdb-card-title",{staticClass:"pt-2",attrs:{tag:"h3"}},[d("router-link",{staticClass:"link_button",attrs:{to:"/article/"+a.id}},[d("strong",[t._v(" "+t._s(a.title)+" ")])])],1)],1),d("p",{staticClass:"content"},[t._v(" "+t._s(a.short_desc)+" ")]),d("router-link",{staticClass:"link_button",attrs:{to:"/article/"+a.id}},[d("mdb-btn",{attrs:{color:"light-blue"}},[d("mdb-icon",{attrs:{icon:"clone left"}}),t._v(" Czytaj więcej ")],1)],1)],1)])])],1)})),1)],1)},e=[],s=d("91c9"),o=d("bc3a"),n=d.n(o);const i="https://dawidplociennikdev.przedprojekt.com/admin/articles/api";var b={name:"Blog",data(){return{id:this.$route.params.id,blogs:[]}},async created(){try{const t=await n.a.get(i);this.blogs=t.data.reverse(),console.log(this.blogs)}catch(t){console.log(t)}},components:{mdbContainer:s["mdbContainer"],mdbRow:s["mdbRow"],mdbCol:s["mdbCol"],mdbCard:s["mdbCard"],mdbCardImage:s["mdbCardImage"],mdbCardHeader:s["mdbCardHeader"],mdbCardBody:s["mdbCardBody"],mdbCardTitle:s["mdbCardTitle"],mdbCardText:s["mdbCardText"],mdbCardFooter:s["mdbCardFooter"],mdbCardUp:s["mdbCardUp"],mdbCardAvatar:s["mdbCardAvatar"],mdbCardGroup:s["mdbCardGroup"],mdbBtn:s["mdbBtn"],mdbView:s["mdbView"],mdbMask:s["mdbMask"],mdbIcon:s["mdbIcon"]}},c=b,m=(d("9d5a"),d("2877")),l=Object(m["a"])(c,r,e,!1,null,null,null);a["default"]=l.exports}}]);
//# sourceMappingURL=chunk-559d6362.908085f8.js.map