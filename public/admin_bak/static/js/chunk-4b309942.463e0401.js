(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-4b309942"],{a7ae:function(t,e,n){"use strict";n.r(e);var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("el-card",[n("el-form",{ref:"form",attrs:{model:t.form,"label-width":"80px"}},[n("el-form-item",{attrs:{label:"类型名称"}},[n("el-input",{model:{value:t.form.name,callback:function(e){t.$set(t.form,"name",e)},expression:"form.name"}})],1),t._v(" "),n("el-form-item",[n("el-button",{attrs:{type:"primary"},on:{click:t.onSubmit}},[t._v("立即创建")]),t._v(" "),n("el-button",{on:{click:function(e){return t.$router.go(-1)}}},[t._v("取消")])],1)],1)],1)],1)},o=[],a=n("fb1e"),u={name:"CategoryCreate",data:function(){return{form:{name:"测试分类"+(new Date).toLocaleDateString()}}},methods:{onSubmit:function(){var t=this,e=this.transformToFormData(this.form);Object(a["a"])(e).then(function(e){t.$router.go(-1)}).catch(function(e){console.error(e),t.$message.error("发生错误")})},transformToFormData:function(t){var e=new FormData;for(var n in t)e.append(n,t[n]);return e}}},c=u,i=n("2877"),f=Object(i["a"])(c,r,o,!1,null,"a46b5e6c",null);e["default"]=f.exports},fb1e:function(t,e,n){"use strict";n.d(e,"b",function(){return o}),n.d(e,"a",function(){return a}),n.d(e,"c",function(){return u});var r=n("b775");function o(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(r["a"])({url:"/base-type/"+(t||""),method:"GET",data:e})}function a(t){return Object(r["a"])({url:"/base-type/create",method:"POST",data:t})}function u(t){return Object(r["a"])({url:"/base-type/"+t,method:"DELETE"})}}}]);