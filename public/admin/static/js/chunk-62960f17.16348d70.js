(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-62960f17"],{"127f":function(e,t,r){"use strict";r("7f7f"),r("3b2b"),r("a481");var n={dateFormat:function(e,t){var r={"M+":e.getMonth()+1,"d+":e.getDate(),"h+":e.getHours(),"m+":e.getMinutes(),"s+":e.getSeconds(),"q+":Math.floor((e.getMonth()+3)/3),"S+":e.getMilliseconds()};for(var n in/(y+)/i.test(t)&&(t=t.replace(RegExp.$1,(e.getFullYear()+"").substr(4-RegExp.$1.length))),r)new RegExp("("+n+")").test(t)&&(t=t.replace(RegExp.$1,1===RegExp.$1.length?r[n]:("00"+r[n]).substr((""+r[n]).length)));return t}},o=r("9b15");t["a"]={randomString:function(e){for(var t=["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"],r="",n=0;n<e;n++){var o=Math.ceil(35*Math.random());r+=t[o]}return r},createOssClient:function(){return new Promise(function(e,t){var r=new o({region:"oss-cn-hangzhou",accessKeyId:"LTAIzB8nL0N9FAVz",accessKeySecret:"wxciCikZ58748vfvGHhnGkt8FFaL0i",bucket:"after90s-dev"});e(r)})},ossUploadFile:function(e){var t=e.file,r=this;return new Promise(function(o,a){var c=n.dateFormat(new Date,"yyyyMMdd"),i=n.dateFormat(new Date,"yyyyMMddhhmmss"),s=r.randomString(4),l=t.name.substr(t.name.indexOf(".")),u="video/"+c+"/"+i+"_"+s+l;r.createOssClient().then(function(r){o({fileName:t.name,fileUrl:u}),r.put(u,t,{progress:function(t){var r={};r.percent=Math.floor(100*t),e.onProgress(r)}}).then(function(t){if(200===t.res.statusCode)return e.onSuccess(t),t;e.onError("上传失败")},function(t){e.onError("上传失败"),a(t)})})})}}},"728c":function(e,t,r){"use strict";r.d(t,"b",function(){return o}),r.d(t,"a",function(){return a}),r.d(t,"c",function(){return c});var n=r("b775");function o(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(n["a"])({url:"/partner/"+(e||""),method:"GET",data:t})}function a(e){return Object(n["a"])({url:"/partner/create",method:"POST",headers:{"Content-Type":"multipart/form-data"},data:e})}function c(e){return Object(n["a"])({url:"/partner/"+e,method:"DELETE"})}},b889:function(e,t,r){"use strict";r.r(t);var n=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("el-card",[r("div",{attrs:{slot:"header"},slot:"header"},[e._v("合作")]),e._v(" "),r("el-form",{ref:"form",attrs:{model:e.corpForm,"label-width":"80px"}},[r("el-form-item",{attrs:{label:"伙伴名称"}},[r("el-col",{attrs:{span:11}},[r("el-input",{model:{value:e.corpForm.name,callback:function(t){e.$set(e.corpForm,"name",t)},expression:"corpForm.name"}})],1)],1),e._v(" "),r("el-form-item",{attrs:{label:"简介"}},[r("el-col",{attrs:{span:11}},[r("el-input",{attrs:{type:"textarea"},model:{value:e.corpForm.description,callback:function(t){e.$set(e.corpForm,"description",t)},expression:"corpForm.description"}})],1)],1),e._v(" "),r("el-form-item",{attrs:{label:"跳转地址"}},[r("el-col",{attrs:{span:11}},[r("el-input",{model:{value:e.corpForm.link,callback:function(t){e.$set(e.corpForm,"link",t)},expression:"corpForm.link"}})],1)],1),e._v(" "),r("el-form-item",{attrs:{label:"logo"}},[r("el-col",{attrs:{span:11}},[r("uploader",{attrs:{"file-count":1,"on-success":e.logoUploaded}})],1)],1),e._v(" "),r("el-form-item",[r("el-button",{attrs:{type:"primary"},on:{click:e.onSubmit}},[e._v("立即创建")]),e._v(" "),r("el-button",{on:{click:function(t){return e.$router.go(-1)}}},[e._v("取消")])],1)],1)],1)],1)},o=[],a=r("728c"),c=r("10ba"),i={name:"Index",components:{Uploader:c["a"]},data:function(){return{corpForm:{name:"",logo:"",description:"",link:""}}},methods:{logoUploaded:function(e){var t=this;this.$nextTick(function(){t.corpForm.logo=e})},onSubmit:function(){var e=this,t=this.transformToFormData(this.corpForm);Object(a["a"])(t).then(function(t){e.$router.go(-1)}).catch(function(t){console.error(t),e.$message.error("创建失败")})},transformToFormData:function(e){var t=new FormData;for(var r in e)t.append(r,e[r]);return t}}},s=i,l=r("2877"),u=Object(l["a"])(s,n,o,!1,null,"09b68748",null);t["default"]=u.exports}}]);