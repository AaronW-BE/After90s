(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-04988a6f"],{"11cc":function(t,e,a){"use strict";a.r(e);var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("el-card",[a("div",{attrs:{slot:"header"},slot:"header"},[t._v("\n        合作伙伴\n      ")]),t._v(" "),a("el-table",{staticStyle:{width:"100%"},attrs:{border:"",data:t.tableData}},[a("el-table-column",{attrs:{prop:"name",label:"名称",width:"180"}}),t._v(" "),a("el-table-column",{attrs:{prop:"logo",label:"logo",width:"180"}}),t._v(" "),a("el-table-column",{attrs:{prop:"description",label:"描述"}}),t._v(" "),a("el-table-column",{attrs:{prop:"link",label:"跳转地址"}}),t._v(" "),a("el-table-column",{attrs:{prop:"created_at",label:"创建时间"}}),t._v(" "),a("el-table-column",{attrs:{label:"操作"},scopedSlots:t._u([{key:"default",fn:function(e){return[a("el-button",{attrs:{type:"danger",size:"mini"},on:{click:function(a){return t.deleteHandle(e.$index,e.row)}}},[t._v("删除")])]}}])})],1)],1)],1)},l=[],r=a("728c"),o={name:"Index",data:function(){return{tableData:[]}},created:function(){this.getList()},methods:{getList:function(){var t=this;Object(r["b"])().then(function(e){console.log(e),t.tableData=e.data.data})},deleteHandle:function(t,e){var a=this;Object(r["c"])(e.id).then(function(e){200===e.code&&a.tableData.splice(t,1)})}}},c=o,u=a("2877"),i=Object(u["a"])(c,n,l,!1,null,"c453d8a2",null);e["default"]=i.exports},"728c":function(t,e,a){"use strict";a.d(e,"b",function(){return l}),a.d(e,"a",function(){return r}),a.d(e,"c",function(){return o});var n=a("b775");function l(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(n["a"])({url:"/partner/"+(t||""),method:"GET",data:e})}function r(t){return Object(n["a"])({url:"/partner/create",method:"POST",headers:{"Content-Type":"multipart/form-data"},data:t})}function o(t){return Object(n["a"])({url:"/partner/"+t,method:"DELETE"})}}}]);