(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-8eee1250"],{"32f0":function(t,e,n){"use strict";n.d(e,"c",function(){return l}),n.d(e,"a",function(){return o}),n.d(e,"b",function(){return r});var a=n("b775");function l(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(a["a"])({url:"/schedule/"+(t||""),method:"GET",data:e})}function o(t){return Object(a["a"])({url:"/schedule",method:"POST",headers:{"Content-Type":"multipart/form-data"},data:t})}function r(t){return Object(a["a"])({url:"/schedule/".concat(t),method:"DELETE"})}},"4a5b":function(t,e,n){"use strict";n.r(e);var a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("el-card",[n("template",{slot:"header"},[t._v("\n        方案列表\n      ")]),t._v(" "),n("el-button",{attrs:{type:"primary"},on:{click:function(e){return t.$router.push({name:"ScheduleCreate"})}}},[t._v("新建")]),t._v(" "),n("el-table",{staticStyle:{width:"100%"},attrs:{border:"",data:t.tableData}},[n("el-table-column",{attrs:{type:"index",width:"50"}}),t._v(" "),n("el-table-column",{attrs:{prop:"title",label:"日期",width:"180"}}),t._v(" "),n("el-table-column",{attrs:{prop:"tags",label:"标签",width:"180"}}),t._v(" "),n("el-table-column",{attrs:{prop:"price",label:"价格"}}),t._v(" "),n("el-table-column",{attrs:{prop:"location",label:"地点"}}),t._v(" "),n("el-table-column",{attrs:{prop:"duration",label:"游玩时间"}}),t._v(" "),n("el-table-column",{attrs:{prop:"people_count",label:"推荐人数"}}),t._v(" "),n("el-table-column",{attrs:{prop:"benefits",label:"收益"}}),t._v(" "),n("el-table-column",{attrs:{prop:"created_at",label:"创建时间"}}),t._v(" "),n("el-table-column",{attrs:{label:"操作"},scopedSlots:t._u([{key:"default",fn:function(e){return[n("el-button",{attrs:{type:"danger",size:"mini"},on:{click:function(n){return t.deleteHandle(e.$index,e.row)}}},[t._v("删除")])]}}])})],1)],2)],1)},l=[],o=n("32f0"),r={name:"Index",data:function(){return{tableData:[]}},created:function(){this.getList()},methods:{getList:function(){var t=this;Object(o["c"])().then(function(e){console.log(e),t.tableData=e.data.data})},deleteHandle:function(t,e){var n=this;Object(o["b"])(e.id).then(function(e){200===e.code&&n.tableData.splice(t,1)}).catch(function(t){console.log(t)}),console.log(t,e)}}},c=r,u=n("2877"),i=Object(u["a"])(c,a,l,!1,null,"1d410478",null);e["default"]=i.exports}}]);