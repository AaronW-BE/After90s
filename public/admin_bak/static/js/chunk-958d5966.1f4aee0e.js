(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-958d5966"],{"127f":function(e,t,n){"use strict";n("7f7f"),n("3b2b"),n("a481");var o={dateFormat:function(e,t){var n={"M+":e.getMonth()+1,"d+":e.getDate(),"h+":e.getHours(),"m+":e.getMinutes(),"s+":e.getSeconds(),"q+":Math.floor((e.getMonth()+3)/3),"S+":e.getMilliseconds()};for(var o in/(y+)/i.test(t)&&(t=t.replace(RegExp.$1,(e.getFullYear()+"").substr(4-RegExp.$1.length))),n)new RegExp("("+o+")").test(t)&&(t=t.replace(RegExp.$1,1===RegExp.$1.length?n[o]:("00"+n[o]).substr((""+n[o]).length)));return t}},r=n("9b15");t["a"]={randomString:function(e){for(var t=["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"],n="",o=0;o<e;o++){var r=Math.ceil(35*Math.random());n+=t[r]}return n},createOssClient:function(){return new Promise(function(e,t){var n=new r({region:"oss-cn-hangzhou",accessKeyId:"LTAIzB8nL0N9FAVz",accessKeySecret:"wxciCikZ58748vfvGHhnGkt8FFaL0i",bucket:"after90s-dev"});e(n)})},ossUploadFile:function(e){var t=e.file,n=this;return new Promise(function(r,a){var l=o.dateFormat(new Date,"yyyyMMdd"),c=o.dateFormat(new Date,"yyyyMMddhhmmss"),s=n.randomString(4),u=t.name.substr(t.name.indexOf(".")),i="video/"+l+"/"+c+"_"+s+u;n.createOssClient().then(function(n){r({fileName:t.name,fileUrl:i}),n.multipartUpload(i,t,{progress:function(t){var n={};n.percent=Math.floor(100*t),e.onProgress(n)}}).then(function(t){if(200===t.res.statusCode)return e.onSuccess(t),t;e.onError("上传失败")},function(t){e.onError("上传失败"),a(t)})})})}}},"32f0":function(e,t,n){"use strict";n.d(t,"c",function(){return r}),n.d(t,"a",function(){return a}),n.d(t,"b",function(){return l});var o=n("b775");function r(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(o["a"])({url:"/schedule/"+(e||""),method:"GET",data:t})}function a(e){return Object(o["a"])({url:"/schedule",method:"POST",headers:{"Content-Type":"multipart/form-data"},data:e})}function l(e){return Object(o["a"])({url:"/schedule/".concat(e),method:"DELETE"})}},"6b22":function(e,t,n){"use strict";n.r(t);var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("el-card",[n("template",{slot:"header"},[e._v("\n      创建线路\n    ")]),e._v(" "),n("el-form",{ref:"form",attrs:{model:e.scheduleForm,"label-width":"80px"}},[n("el-form-item",{attrs:{label:"类别"}},[n("el-col",{attrs:{span:11}},[n("el-select",{attrs:{placeholder:"方案类型 "},model:{value:e.scheduleForm.schedule_type_id,callback:function(t){e.$set(e.scheduleForm,"schedule_type_id",t)},expression:"scheduleForm.schedule_type_id"}},e._l(e.categories,function(e){return n("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})}),1)],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"线路名称"}},[n("el-col",{attrs:{span:11}},[n("el-input",{model:{value:e.scheduleForm.title,callback:function(t){e.$set(e.scheduleForm,"title",t)},expression:"scheduleForm.title"}})],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"标签"}},[n("div",{staticClass:"tags-wrap"},[e._l(e.scheduleForm.tags.split(",").filter(function(e){return e&&e.trim()}),function(t,o){return[n("el-tag",{key:o,staticClass:"tag"},[e._v(e._s(t))])]})],2),e._v(" "),n("el-col",{attrs:{span:4}},[n("el-input",{model:{value:e.scheduleForm.tags,callback:function(t){e.$set(e.scheduleForm,"tags",t)},expression:"scheduleForm.tags"}}),e._v(" "),n("span",[e._v("使用逗号分隔不同标签")])],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"地点"}},[n("el-col",{attrs:{span:4}},[n("el-input",{model:{value:e.scheduleForm.location,callback:function(t){e.$set(e.scheduleForm,"location",t)},expression:"scheduleForm.location"}})],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"线路人数"}},[n("el-col",{attrs:{span:4}},[n("el-input",{model:{value:e.scheduleForm.people_count,callback:function(t){e.$set(e.scheduleForm,"people_count",t)},expression:"scheduleForm.people_count"}})],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"线路收益"}},[n("el-col",{attrs:{span:11}},[n("el-input",{attrs:{type:"textarea"},model:{value:e.scheduleForm.benefits,callback:function(t){e.$set(e.scheduleForm,"benefits",t)},expression:"scheduleForm.benefits"}})],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"线路封面"}},[n("el-col",{attrs:{span:11}},[n("uploader",{attrs:{"file-count":1,"on-success":e.coverUploaded}})],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"线路图片"}},[n("el-col",{attrs:{span:11}},[n("uploader",{attrs:{"file-count":4,multiple:!0,"on-success":e.albumUploaded}})],1)],1),e._v(" "),n("el-form-item",{attrs:{label:"线路描述"}},[n("tinymce",{attrs:{menubar:""},model:{value:e.scheduleForm.description,callback:function(t){e.$set(e.scheduleForm,"description",t)},expression:"scheduleForm.description"}})],1),e._v(" "),n("el-form-item",[n("el-button",{attrs:{type:"primary"},on:{click:e.onSubmit}},[e._v("立即创建")]),e._v(" "),n("el-button",[e._v("取消")])],1)],1)],2)],1)},r=[],a=n("8256"),l=n("32f0"),c=n("10ba"),s=n("c405"),u={name:"ScheduleCreate",components:{Uploader:c["a"],Tinymce:a["a"]},data:function(){return{categories:[],scheduleForm:{schedule_type_id:null,title:"测试线路"+(new Date).toLocaleDateString(),tags:"",description:"",price:0,location:"",duration:0,people_count:10,benefits:"",cover:"",albums:[]}}},created:function(){var e=this;Object(s["b"])().then(function(t){e.categories=t.data.data,console.log(t)})},methods:{onSubmit:function(){var e=this.transformToFormData(this.scheduleForm);console.log("submit",e),Object(l["a"])(e).then(function(e){console.log(e)}).catch(function(e){console.error(e)})},transformToFormData:function(e){var t=new FormData;for(var n in e)t.append(n,e[n]);return t},albumUploaded:function(e){var t=this;this.$nextTick(function(){t.scheduleForm.albums=e})},coverUploaded:function(e){var t=this;this.$nextTick(function(){t.scheduleForm.cover=e})}}},i=u,d=(n("9c4f"),n("2877")),m=Object(d["a"])(i,o,r,!1,null,"8e9249c6",null);t["default"]=m.exports},"90c0":function(e,t,n){},"9c4f":function(e,t,n){"use strict";var o=n("90c0"),r=n.n(o);r.a},c405:function(e,t,n){"use strict";n.d(t,"b",function(){return r}),n.d(t,"a",function(){return a}),n.d(t,"c",function(){return l});var o=n("b775");function r(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object(o["a"])({url:"/category/"+(e||""),method:"GET",data:t})}function a(e){return Object(o["a"])({url:"/category/create",method:"POST",data:e})}function l(e){return Object(o["a"])({url:"/category/"+e,method:"DELETE"})}}}]);