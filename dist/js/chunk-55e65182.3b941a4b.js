(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-55e65182"],{"000e":function(a,t,r){"use strict";r.r(t);var e=function(){var a=this,t=a.$createElement,r=a._self._c||t;return r("div",{staticClass:"params page"},[r("Params")],1)},n=[],d=r("91c9"),o=r("5794"),s={name:"ParamsPage",components:{Params:o["a"],mdbBtn:d["mdbBtn"],mdbBtnFixed:d["mdbBtnFixed"],mdbBtnFixedItem:d["mdbBtnFixedItem"],mdbBtnGroup:d["mdbBtnGroup"],mdbIcon:d["mdbIcon"]}},i=s,m=(r("1c08"),r("2877")),c=Object(m["a"])(i,e,n,!1,null,null,null);t["default"]=c.exports},"1c08":function(a,t,r){"use strict";var e=r("6843"),n=r.n(e);n.a},"1db8":function(a,t,r){"use strict";var e=r("df45"),n=r.n(e);n.a},5794:function(a,t,r){"use strict";var e=function(){var a=this,t=a.$createElement,r=a._self._c||t;return r("div",{staticClass:"container"},[r("div",{staticClass:"paramsPage"},[r("a",{attrs:{title:"Powrót"},on:{click:function(t){return a.$router.go(-1)}}},[r("mdb-icon",{attrs:{icon:"chevron-left"}}),a._v(" powrót")],1),r("hr"),r("h3",{staticClass:"header"},[a._v(a._s(a.param.title))]),r("div",[a._v(" Aktualna wartość dla tego parametru wynosi: "),r("span",{staticClass:"special ml-3"},[a._v(a._s(a.param.value)+" ")]),a._v(a._s(a.param.unit)+" ")]),a.param.regular?r("div",[a._v(" Norma dla tego parametru wynosi: "),r("span",{staticClass:"special ml-3"},[a._v(a._s(a.param.regular)+" ")]),a._v(a._s(a.param.unit)+" ")]):a._e(),r("div",{staticClass:"mt-4"},[a._v(" "+a._s(a.param.short_desc)+" ")]),r("hr"),a.renderChart?r("div",[r("ChartComp",{attrs:{lineColor:a.color}})],1):a._e()])])},n=[],d=r("91c9"),o=function(){var a=this,t=a.$createElement,r=a._self._c||t;return r("div",[r("GChart",{attrs:{type:"LineChart",data:a.chartData,options:a.chartOptions}})],1)},s=[],i=r("cb43"),m=r("bc3a"),c=r.n(m),l={components:{GChart:i["GChart"]},props:{lineColor:String},data(){return{id:this.$route.params.id,param:[],chartData:[["Miesiąc","Parametr"]],chartOptions:{legend:"none",colors:[this.lineColor],pointSize:10,height:400}}},async created(){const a="https://dawidplociennikdev.przedprojekt.com/admin/parametrs/apiHistoryParam/"+this.id;try{const t=await c.a.get(a);this.param=t.data.reverse(),this.param.forEach(a=>{var t=[a.date,parseFloat(a.value)];this.chartData.push(t)})}catch(t){console.log(t)}}},p=l,b=(r("a967"),r("2877")),u=Object(b["a"])(p,o,s,!1,null,null,null),h=u.exports,C={name:"Params",data(){return{id:this.$route.params.id,param:[],color:"",renderChart:Boolean}},async created(){this.renderChart=!1;const a="https://dawidplociennikdev.przedprojekt.com/admin/parametrs/apiOne/"+this.id;try{const t=await c.a.get(a);this.param=t.data,this.color=t.data.color,this.renderChart=!0}catch(t){console.log(t)}},props:{msg:String},components:{ChartComp:h,mdbContainer:d["mdbContainer"],mdbRow:d["mdbRow"],mdbCol:d["mdbCol"],mdbCard:d["mdbCard"],mdbCardImage:d["mdbCardImage"],mdbCardHeader:d["mdbCardHeader"],mdbCardBody:d["mdbCardBody"],mdbCardTitle:d["mdbCardTitle"],mdbCardText:d["mdbCardText"],mdbCardFooter:d["mdbCardFooter"],mdbCardUp:d["mdbCardUp"],mdbCardAvatar:d["mdbCardAvatar"],mdbCardGroup:d["mdbCardGroup"],mdbBtn:d["mdbBtn"],mdbView:d["mdbView"],mdbMask:d["mdbMask"],mdbIcon:d["mdbIcon"]}},v=C,_=(r("1db8"),Object(b["a"])(v,e,n,!1,null,null,null));t["a"]=_.exports},6843:function(a,t,r){},"983a":function(a,t,r){},a967:function(a,t,r){"use strict";var e=r("983a"),n=r.n(e);n.a},df45:function(a,t,r){}}]);
//# sourceMappingURL=chunk-55e65182.3b941a4b.js.map