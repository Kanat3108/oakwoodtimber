(window.vcvWebpackJsonp4x=window.vcvWebpackJsonp4x||[]).push([[0],{"./googleMaps/component.js":function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=d(i("./node_modules/babel-runtime/helpers/extends.js")),n=d(i("./node_modules/babel-runtime/core-js/object/get-prototype-of.js")),o=d(i("./node_modules/babel-runtime/helpers/classCallCheck.js")),a=d(i("./node_modules/babel-runtime/helpers/createClass.js")),l=d(i("./node_modules/babel-runtime/helpers/possibleConstructorReturn.js")),r=d(i("./node_modules/babel-runtime/helpers/inherits.js")),p=d(i("./node_modules/react/index.js"));function d(e){return e&&e.__esModule?e:{default:e}}var c=function(e){function t(){var e,i,s,a;(0,o.default)(this,t);for(var r=arguments.length,p=Array(r),d=0;d<r;d++)p[d]=arguments[d];return i=s=(0,l.default)(this,(e=t.__proto__||(0,n.default)(t)).call.apply(e,[this].concat(p))),s.defaultSize={width:"600",height:"450"},a=i,(0,l.default)(s,a)}return(0,r.default)(t,e),(0,a.default)(t,[{key:"componentDidMount",value:function(){this.props.atts.embed&&(this.setCustomSize(this.props.atts,this.getDefaultSize(this.props.atts.embed)),this.appendMap(this.props.atts.embed))}},{key:"componentWillReceiveProps",value:function(e){!e.atts.embed||this.props.atts.embed===e.atts.embed&&this.props.atts.width===e.atts.width&&this.props.atts.height===e.atts.height||(this.setCustomSize(e.atts,this.getDefaultSize(e.atts.embed)),this.appendMap(e.atts.embed))}},{key:"getSizeFromEmbed",value:function(e){var t={},i=e.match(/width="\d+"/g);if(i=i?i[0]:""){var s=i.match(/\d+/g);s=s?s[0]:"",t.width=s}var n=e.match(/height="\d+"/g);if(n=n?n[0]:""){var o=n.match(/\d+/g);o=o?o[0]:"",t.height=o}return t}},{key:"getDefaultSize",value:function(e){var t=e?this.getSizeFromEmbed(e):"";return{width:t&&t.width?t.width:this.defaultSize.width,height:t&&t.height?t.height:this.defaultSize.height}}},{key:"setCustomSize",value:function(e,t){var i=this.validateSize(e.width),s=this.validateSize(e.height);i=/^\d+$/.test(i)?i+"px":i,s=/^\d+$/.test(s)?s+"px":s;var n={width:i||t.width+"px",height:s||t.height+"px"};s?this.setSizeState(n):(n.paddingBottom=t.height/t.width*100+"%",n.height="auto",this.setSizeState(n))}},{key:"setSizeState",value:function(e){this.setState({size:e})}},{key:"validateSize",value:function(e){var t=new RegExp("^-?\\d*(\\.\\d{0,9})?("+["px","em","rem","%","vw","vh"].join("|")+")?$");return""===e||e.match(t)?e:null}},{key:"appendMap",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";this.refs.mapInner.innerHTML=e}},{key:"render",value:function(){var e=this.props,t=e.id,i=e.atts,n=e.editor,o=i.customClass,a=i.alignment,l=i.width,r=i.height,d=i.metaCustomId,c="vce-google-maps",g="vce-google-maps-wrapper vce",m={},u={},h={};"string"==typeof o&&o&&(c+=" "+o),h.style={width:this.state&&this.state.size?this.state.size.width:null,height:this.state&&this.state.size?this.state.size.height:null},u.style={paddingBottom:this.state&&this.state.size?this.state.size.paddingBottom:null},l&&(g+=" vce-google-maps--width-custom"),g+=r?" vce-google-maps--height-custom":" vce-google-maps-proportional",a&&(c+=" vce-google-maps--align-"+a),m.key="customProps:"+t,d&&(m.id=d);var v=this.applyDO("all");return p.default.createElement("div",(0,s.default)({},m,{className:c},n),p.default.createElement("div",(0,s.default)({className:g},h,{id:"el-"+t},v),p.default.createElement("div",(0,s.default)({className:"vce-google-maps-inner"},u,{ref:"mapInner"}))))}}]),t}(d(i("./node_modules/vc-cake/index.js")).default.getService("api").elementComponent);t.default=c},"./googleMaps/index.js":function(e,t,i){"use strict";var s=o(i("./node_modules/vc-cake/index.js")),n=o(i("./googleMaps/component.js"));function o(e){return e&&e.__esModule?e:{default:e}}(0,s.default.getService("cook").add)(i("./googleMaps/settings.json"),function(e){e.add(n.default)},{css:i("./node_modules/raw-loader/index.js!./googleMaps/styles.css"),editorCss:i("./node_modules/raw-loader/index.js!./googleMaps/editor.css")},"")},"./googleMaps/settings.json":function(e){e.exports={embed:{type:"string",access:"public",value:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51958.85712317783!2d-122.07918491530957!3d37.39946933872877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x6c296c66619367e0!2sGoogleplex!5e0!3m2!1sen!2slv!4v1476280809540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',options:{label:"Map embed iframe",description:'Visit Google maps to create your map (Step by step: 1) Find location 2) Click the cog symbol in the lower right corner and select "Share or embed map" 3) On modal window select "Embed map" 4) Copy iframe code and paste it).'}},designOptions:{type:"designOptions",access:"public",value:{},options:{label:"Design Options"}},editFormTab1:{type:"group",access:"protected",value:["embed","width","height","alignment","metaCustomId","customClass"],options:{label:"General"}},metaEditFormTabs:{type:"group",access:"protected",value:["editFormTab1","designOptions"]},relatedTo:{type:"group",access:"protected",value:["General"]},customClass:{type:"string",access:"public",value:"",options:{label:"Extra class name",description:"Add an extra class name to the element and refer to it from Custom CSS option."}},assetsLibrary:{access:"public",type:"string",value:["animate"]},width:{type:"string",access:"public",value:"",options:{label:"Width",description:"Enter width in pixels or percentages (Example: 200px)."}},height:{type:"string",access:"public",value:"",options:{label:"Height",description:"Enter height in pixels or percentages (Example: 200px)."}},alignment:{type:"buttonGroup",access:"public",value:"left",options:{label:"Alignment",values:[{label:"Left",value:"left",icon:"vcv-ui-icon-attribute-alignment-left"},{label:"Center",value:"center",icon:"vcv-ui-icon-attribute-alignment-center"},{label:"Right",value:"right",icon:"vcv-ui-icon-attribute-alignment-right"}]}},metaDisableInteractionInEditor:{type:"toggle",access:"protected",value:!0},metaCustomId:{type:"customId",access:"public",value:"",options:{label:"Element ID",description:"Apply unique Id to element to link directly to it by using #your_id (for element id use lowercase input only)."}},tag:{access:"protected",type:"string",value:"googleMaps"},metaPublicJs:{access:"protected",type:"string",value:{libraries:[{libPaths:"public/dist/googleMaps.min.js"}]}}}},"./node_modules/raw-loader/index.js!./googleMaps/editor.css":function(e,t){e.exports='[data-vcv-element-disable-interaction="true"] .vce-google-maps-inner {\n  position: relative;\n}\n\n[data-vcv-element-disable-interaction="true"] .vce-google-maps-inner::after {\n  content: "";\n  position: absolute;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 999;\n}\n\n.vce-google-maps {\n  min-height: 1em;\n}\n'},"./node_modules/raw-loader/index.js!./googleMaps/styles.css":function(e,t){e.exports=".vce-google-maps {\n  /*min-height: 100%;*/\n}\n\n.vce-google-maps-wrapper {\n  display: inline-block;\n  vertical-align: top;\n  max-width: 100%;\n}\n\n.vce-google-maps-proportional {\n  position: relative;\n  height: auto;\n}\n\n.vce-google-maps-wrapper.vce-google-maps-proportional {\n  height: auto;\n}\n\n.vce-google-maps-wrapper.vce-google-maps-proportional .vce-google-maps-inner {\n  height: 0;\n}\n\n.vce-google-maps--width-custom .vce-google-maps-inner {\n  width: 100%;\n}\n\n.vce-google-maps--height-custom .vce-google-maps-inner {\n  height: 100%;\n}\n\n.vce-google-maps--width-custom iframe {\n  width: 100%;\n}\n\n.vce-google-maps--height-custom iframe {\n  height: 100%;\n}\n\n.vce-google-maps-inner iframe {\n  max-width: 100%;\n  display: block;\n  vertical-align: top;\n}\n\n.vce-google-maps-proportional iframe {\n  width: 100%;\n  height: 100%;\n  position: absolute;\n  top: 0;\n  left: 0;\n}\n\n.vce-google-maps--align-center {\n  text-align: center;\n}\n\n.vce-google-maps--align-right {\n  text-align: right;\n}\n\n.vce-google-maps--align-left {\n  text-align: left;\n}\n\n"}},[["./googleMaps/index.js"]]]);