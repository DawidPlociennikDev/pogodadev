(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-126cb6cc"],{"1db8":function(a,t,e){"use strict";var r=e("df45"),n=e.n(r);n.a},"34f1":function(a,t,e){"use strict";e.r(t);var r=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",{staticClass:"params page"},[e("Params")],1)},n=[],i=e("91c9"),s=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",{staticClass:"container"},[e("div",{staticClass:"paramsPage"},[e("h1",{staticClass:"header"},[a._v("PM 2.5")]),a._m(0),a._m(1),e("h4",{staticClass:"mt-4"},[a._v(" Jakość powietrza jest dobra. Zanieczyszczenia powietrza nie stanowią zagrożenia. Warunki idealne na aktywności na zewnątrz. ")]),e("hr"),e("ChartComp")],1)])},d=[function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("h4",[a._v(" Aktualny stan powietrza w okolicy wynosi: "),e("span",{staticClass:"special ml-3"},[a._v("0 ")]),a._v("μg/m3 ")])},function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("h4",[a._v(" Norma dla tego parametru wynosi: "),e("span",{staticClass:"special ml-3"},[a._v("20 ")]),a._v("μg/m3 ")])}],o=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",{staticClass:"container"},[a._m(0),e("GChart",{attrs:{type:"LineChart",data:a.chartData,options:a.chartOptions}})],1)},c=[function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("h4",{staticClass:"text-center mb-3"},[a._v("Zmiany jakości powietrza w roku "),e("span",{staticClass:"chart_title"},[a._v("2019")])])}],m=e("cb43"),l={components:{GChart:m["GChart"]},data(){return{chartData:[["Miesiąc","PM 1"],["Styczeń",6],["Luty",4],["Marzec",5],["Kwiecień",2],["Maj",2],["Czerwiec",1],["Lipiec",0],["Sierpień",0],["Wrzesień",1],["Październik",1],["Listopad",3],["Grudzień",7]],chartOptions:{chart:{title:"Jakość powietrza",subtitle:"Jakość powietrza w roku: 2019"}}}}},b=l,u=(e("a967"),e("2877")),p=Object(u["a"])(b,o,c,!1,null,null,null),C=p.exports,h=e("bc3a"),v=e.n(h);const w="https://api.looko2.com/?method=GetLOOKO&id=5CCF7F0C2E8B&token=1570445090";var _={name:"Params",data(){return{params:[]}},async created(){try{const a=await v.a.get(w);this.params=a.data,console.log(this.params)}catch(a){console.log(a)}},props:{msg:String},components:{ChartComp:C,mdbContainer:i["mdbContainer"],mdbRow:i["mdbRow"],mdbCol:i["mdbCol"],mdbCard:i["mdbCard"],mdbCardImage:i["mdbCardImage"],mdbCardHeader:i["mdbCardHeader"],mdbCardBody:i["mdbCardBody"],mdbCardTitle:i["mdbCardTitle"],mdbCardText:i["mdbCardText"],mdbCardFooter:i["mdbCardFooter"],mdbCardUp:i["mdbCardUp"],mdbCardAvatar:i["mdbCardAvatar"],mdbCardGroup:i["mdbCardGroup"],mdbBtn:i["mdbBtn"],mdbView:i["mdbView"],mdbMask:i["mdbMask"],mdbIcon:i["mdbIcon"]}},f=_,k=(e("1db8"),Object(u["a"])(f,s,d,!1,null,null,null)),z=k.exports,g={name:"ParamsPage",components:{Params:z,mdbBtn:i["mdbBtn"],mdbBtnFixed:i["mdbBtnFixed"],mdbBtnFixedItem:i["mdbBtnFixedItem"],mdbBtnGroup:i["mdbBtnGroup"],mdbIcon:i["mdbIcon"]}},y=g,B=(e("4050"),Object(u["a"])(y,r,n,!1,null,null,null));t["default"]=B.exports},4050:function(a,t,e){"use strict";var r=e("8b3c"),n=e.n(r);n.a},"8b3c":function(a,t,e){},"983a":function(a,t,e){},a967:function(a,t,e){"use strict";var r=e("983a"),n=e.n(r);n.a},df45:function(a,t,e){}}]);
//# sourceMappingURL=chunk-126cb6cc.b2c46a89.js.map