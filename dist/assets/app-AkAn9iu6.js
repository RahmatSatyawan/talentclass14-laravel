function xe(e,t){return function(){return e.apply(t,arguments)}}const{toString:Ge}=Object.prototype,{getPrototypeOf:ae}=Object,J=(e=>t=>{const n=Ge.call(t);return e[n]||(e[n]=n.slice(8,-1).toLowerCase())})(Object.create(null)),A=e=>(e=e.toLowerCase(),t=>J(t)===e),V=e=>t=>typeof t===e,{isArray:_}=Array,k=V("undefined");function Qe(e){return e!==null&&!k(e)&&e.constructor!==null&&!k(e.constructor)&&O(e.constructor.isBuffer)&&e.constructor.isBuffer(e)}const Ce=A("ArrayBuffer");function Ze(e){let t;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?t=ArrayBuffer.isView(e):t=e&&e.buffer&&Ce(e.buffer),t}const Ye=V("string"),O=V("function"),Ne=V("number"),v=e=>e!==null&&typeof e=="object",et=e=>e===!0||e===!1,q=e=>{if(J(e)!=="object")return!1;const t=ae(e);return(t===null||t===Object.prototype||Object.getPrototypeOf(t)===null)&&!(Symbol.toStringTag in e)&&!(Symbol.iterator in e)},tt=A("Date"),nt=A("File"),rt=A("Blob"),st=A("FileList"),ot=e=>v(e)&&O(e.pipe),it=e=>{let t;return e&&(typeof FormData=="function"&&e instanceof FormData||O(e.append)&&((t=J(e))==="formdata"||t==="object"&&O(e.toString)&&e.toString()==="[object FormData]"))},at=A("URLSearchParams"),[ct,lt,ut,ft]=["ReadableStream","Request","Response","Headers"].map(A),dt=e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function j(e,t,{allOwnKeys:n=!1}={}){if(e===null||typeof e>"u")return;let r,s;if(typeof e!="object"&&(e=[e]),_(e))for(r=0,s=e.length;r<s;r++)t.call(null,e[r],r,e);else{const o=n?Object.getOwnPropertyNames(e):Object.keys(e),i=o.length;let c;for(r=0;r<i;r++)c=o[r],t.call(null,e[c],c,e)}}function Pe(e,t){t=t.toLowerCase();const n=Object.keys(e);let r=n.length,s;for(;r-- >0;)if(s=n[r],t===s.toLowerCase())return s;return null}const Le=typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global,Fe=e=>!k(e)&&e!==Le;function Z(){const{caseless:e}=Fe(this)&&this||{},t={},n=(r,s)=>{const o=e&&Pe(t,s)||s;q(t[o])&&q(r)?t[o]=Z(t[o],r):q(r)?t[o]=Z({},r):_(r)?t[o]=r.slice():t[o]=r};for(let r=0,s=arguments.length;r<s;r++)arguments[r]&&j(arguments[r],n);return t}const ht=(e,t,n,{allOwnKeys:r}={})=>(j(t,(s,o)=>{n&&O(s)?e[o]=xe(s,n):e[o]=s},{allOwnKeys:r}),e),pt=e=>(e.charCodeAt(0)===65279&&(e=e.slice(1)),e),mt=(e,t,n,r)=>{e.prototype=Object.create(t.prototype,r),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),n&&Object.assign(e.prototype,n)},yt=(e,t,n,r)=>{let s,o,i;const c={};if(t=t||{},e==null)return t;do{for(s=Object.getOwnPropertyNames(e),o=s.length;o-- >0;)i=s[o],(!r||r(i,e,t))&&!c[i]&&(t[i]=e[i],c[i]=!0);e=n!==!1&&ae(e)}while(e&&(!n||n(e,t))&&e!==Object.prototype);return t},wt=(e,t,n)=>{e=String(e),(n===void 0||n>e.length)&&(n=e.length),n-=t.length;const r=e.indexOf(t,n);return r!==-1&&r===n},gt=e=>{if(!e)return null;if(_(e))return e;let t=e.length;if(!Ne(t))return null;const n=new Array(t);for(;t-- >0;)n[t]=e[t];return n},Et=(e=>t=>e&&t instanceof e)(typeof Uint8Array<"u"&&ae(Uint8Array)),bt=(e,t)=>{const r=(e&&e[Symbol.iterator]).call(e);let s;for(;(s=r.next())&&!s.done;){const o=s.value;t.call(e,o[0],o[1])}},St=(e,t)=>{let n;const r=[];for(;(n=e.exec(t))!==null;)r.push(n);return r},Rt=A("HTMLFormElement"),Ot=e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(n,r,s){return r.toUpperCase()+s}),he=(({hasOwnProperty:e})=>(t,n)=>e.call(t,n))(Object.prototype),Tt=A("RegExp"),_e=(e,t)=>{const n=Object.getOwnPropertyDescriptors(e),r={};j(n,(s,o)=>{let i;(i=t(s,o,e))!==!1&&(r[o]=i||s)}),Object.defineProperties(e,r)},At=e=>{_e(e,(t,n)=>{if(O(e)&&["arguments","caller","callee"].indexOf(n)!==-1)return!1;const r=e[n];if(O(r)){if(t.enumerable=!1,"writable"in t){t.writable=!1;return}t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+n+"'")})}})},xt=(e,t)=>{const n={},r=s=>{s.forEach(o=>{n[o]=!0})};return _(e)?r(e):r(String(e).split(t)),n},Ct=()=>{},Nt=(e,t)=>e!=null&&Number.isFinite(e=+e)?e:t,K="abcdefghijklmnopqrstuvwxyz",pe="0123456789",Be={DIGIT:pe,ALPHA:K,ALPHA_DIGIT:K+K.toUpperCase()+pe},Pt=(e=16,t=Be.ALPHA_DIGIT)=>{let n="";const{length:r}=t;for(;e--;)n+=t[Math.random()*r|0];return n};function Lt(e){return!!(e&&O(e.append)&&e[Symbol.toStringTag]==="FormData"&&e[Symbol.iterator])}const Ft=e=>{const t=new Array(10),n=(r,s)=>{if(v(r)){if(t.indexOf(r)>=0)return;if(!("toJSON"in r)){t[s]=r;const o=_(r)?[]:{};return j(r,(i,c)=>{const f=n(i,s+1);!k(f)&&(o[c]=f)}),t[s]=void 0,o}}return r};return n(e,0)},_t=A("AsyncFunction"),Bt=e=>e&&(v(e)||O(e))&&O(e.then)&&O(e.catch),a={isArray:_,isArrayBuffer:Ce,isBuffer:Qe,isFormData:it,isArrayBufferView:Ze,isString:Ye,isNumber:Ne,isBoolean:et,isObject:v,isPlainObject:q,isReadableStream:ct,isRequest:lt,isResponse:ut,isHeaders:ft,isUndefined:k,isDate:tt,isFile:nt,isBlob:rt,isRegExp:Tt,isFunction:O,isStream:ot,isURLSearchParams:at,isTypedArray:Et,isFileList:st,forEach:j,merge:Z,extend:ht,trim:dt,stripBOM:pt,inherits:mt,toFlatObject:yt,kindOf:J,kindOfTest:A,endsWith:wt,toArray:gt,forEachEntry:bt,matchAll:St,isHTMLForm:Rt,hasOwnProperty:he,hasOwnProp:he,reduceDescriptors:_e,freezeMethods:At,toObjectSet:xt,toCamelCase:Ot,noop:Ct,toFiniteNumber:Nt,findKey:Pe,global:Le,isContextDefined:Fe,ALPHABET:Be,generateString:Pt,isSpecCompliantForm:Lt,toJSONObject:Ft,isAsyncFn:_t,isThenable:Bt};function p(e,t,n,r,s){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=new Error().stack,this.message=e,this.name="AxiosError",t&&(this.code=t),n&&(this.config=n),r&&(this.request=r),s&&(this.response=s)}a.inherits(p,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:a.toJSONObject(this.config),code:this.code,status:this.response&&this.response.status?this.response.status:null}}});const De=p.prototype,Ue={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach(e=>{Ue[e]={value:e}});Object.defineProperties(p,Ue);Object.defineProperty(De,"isAxiosError",{value:!0});p.from=(e,t,n,r,s,o)=>{const i=Object.create(De);return a.toFlatObject(e,i,function(f){return f!==Error.prototype},c=>c!=="isAxiosError"),p.call(i,e.message,t,n,r,s),i.cause=e,i.name=e.name,o&&Object.assign(i,o),i};const Dt=null;function Y(e){return a.isPlainObject(e)||a.isArray(e)}function ke(e){return a.endsWith(e,"[]")?e.slice(0,-2):e}function me(e,t,n){return e?e.concat(t).map(function(s,o){return s=ke(s),!n&&o?"["+s+"]":s}).join(n?".":""):t}function Ut(e){return a.isArray(e)&&!e.some(Y)}const kt=a.toFlatObject(a,{},null,function(t){return/^is[A-Z]/.test(t)});function W(e,t,n){if(!a.isObject(e))throw new TypeError("target must be an object");t=t||new FormData,n=a.toFlatObject(n,{metaTokens:!0,dots:!1,indexes:!1},!1,function(m,b){return!a.isUndefined(b[m])});const r=n.metaTokens,s=n.visitor||l,o=n.dots,i=n.indexes,f=(n.Blob||typeof Blob<"u"&&Blob)&&a.isSpecCompliantForm(t);if(!a.isFunction(s))throw new TypeError("visitor must be a function");function u(d){if(d===null)return"";if(a.isDate(d))return d.toISOString();if(!f&&a.isBlob(d))throw new p("Blob is not supported. Use a Buffer instead.");return a.isArrayBuffer(d)||a.isTypedArray(d)?f&&typeof Blob=="function"?new Blob([d]):Buffer.from(d):d}function l(d,m,b){let S=d;if(d&&!b&&typeof d=="object"){if(a.endsWith(m,"{}"))m=r?m:m.slice(0,-2),d=JSON.stringify(d);else if(a.isArray(d)&&Ut(d)||(a.isFileList(d)||a.endsWith(m,"[]"))&&(S=a.toArray(d)))return m=ke(m),S.forEach(function(w,D){!(a.isUndefined(w)||w===null)&&t.append(i===!0?me([m],D,o):i===null?m:m+"[]",u(w))}),!1}return Y(d)?!0:(t.append(me(b,m,o),u(d)),!1)}const h=[],g=Object.assign(kt,{defaultVisitor:l,convertValue:u,isVisitable:Y});function y(d,m){if(!a.isUndefined(d)){if(h.indexOf(d)!==-1)throw Error("Circular reference detected in "+m.join("."));h.push(d),a.forEach(d,function(S,x){(!(a.isUndefined(S)||S===null)&&s.call(t,S,a.isString(x)?x.trim():x,m,g))===!0&&y(S,m?m.concat(x):[x])}),h.pop()}}if(!a.isObject(e))throw new TypeError("data must be an object");return y(e),t}function ye(e){const t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,function(r){return t[r]})}function ce(e,t){this._pairs=[],e&&W(e,this,t)}const je=ce.prototype;je.append=function(t,n){this._pairs.push([t,n])};je.toString=function(t){const n=t?function(r){return t.call(this,r,ye)}:ye;return this._pairs.map(function(s){return n(s[0])+"="+n(s[1])},"").join("&")};function jt(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function Ie(e,t,n){if(!t)return e;const r=n&&n.encode||jt,s=n&&n.serialize;let o;if(s?o=s(t,n):o=a.isURLSearchParams(t)?t.toString():new ce(t,n).toString(r),o){const i=e.indexOf("#");i!==-1&&(e=e.slice(0,i)),e+=(e.indexOf("?")===-1?"?":"&")+o}return e}class we{constructor(){this.handlers=[]}use(t,n,r){return this.handlers.push({fulfilled:t,rejected:n,synchronous:r?r.synchronous:!1,runWhen:r?r.runWhen:null}),this.handlers.length-1}eject(t){this.handlers[t]&&(this.handlers[t]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(t){a.forEach(this.handlers,function(r){r!==null&&t(r)})}}const qe={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},It=typeof URLSearchParams<"u"?URLSearchParams:ce,qt=typeof FormData<"u"?FormData:null,Ht=typeof Blob<"u"?Blob:null,Mt={isBrowser:!0,classes:{URLSearchParams:It,FormData:qt,Blob:Ht},protocols:["http","https","file","blob","url","data"]},le=typeof window<"u"&&typeof document<"u",zt=(e=>le&&["ReactNative","NativeScript","NS"].indexOf(e)<0)(typeof navigator<"u"&&navigator.product),Jt=typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function",Vt=le&&window.location.href||"http://localhost",vt=Object.freeze(Object.defineProperty({__proto__:null,hasBrowserEnv:le,hasStandardBrowserEnv:zt,hasStandardBrowserWebWorkerEnv:Jt,origin:Vt},Symbol.toStringTag,{value:"Module"})),T={...vt,...Mt};function Wt(e,t){return W(e,new T.classes.URLSearchParams,Object.assign({visitor:function(n,r,s,o){return T.isNode&&a.isBuffer(n)?(this.append(r,n.toString("base64")),!1):o.defaultVisitor.apply(this,arguments)}},t))}function $t(e){return a.matchAll(/\w+|\[(\w*)]/g,e).map(t=>t[0]==="[]"?"":t[1]||t[0])}function Kt(e){const t={},n=Object.keys(e);let r;const s=n.length;let o;for(r=0;r<s;r++)o=n[r],t[o]=e[o];return t}function He(e){function t(n,r,s,o){let i=n[o++];if(i==="__proto__")return!0;const c=Number.isFinite(+i),f=o>=n.length;return i=!i&&a.isArray(s)?s.length:i,f?(a.hasOwnProp(s,i)?s[i]=[s[i],r]:s[i]=r,!c):((!s[i]||!a.isObject(s[i]))&&(s[i]=[]),t(n,r,s[i],o)&&a.isArray(s[i])&&(s[i]=Kt(s[i])),!c)}if(a.isFormData(e)&&a.isFunction(e.entries)){const n={};return a.forEachEntry(e,(r,s)=>{t($t(r),s,n,0)}),n}return null}function Xt(e,t,n){if(a.isString(e))try{return(t||JSON.parse)(e),a.trim(e)}catch(r){if(r.name!=="SyntaxError")throw r}return(n||JSON.stringify)(e)}const I={transitional:qe,adapter:["xhr","http","fetch"],transformRequest:[function(t,n){const r=n.getContentType()||"",s=r.indexOf("application/json")>-1,o=a.isObject(t);if(o&&a.isHTMLForm(t)&&(t=new FormData(t)),a.isFormData(t))return s?JSON.stringify(He(t)):t;if(a.isArrayBuffer(t)||a.isBuffer(t)||a.isStream(t)||a.isFile(t)||a.isBlob(t)||a.isReadableStream(t))return t;if(a.isArrayBufferView(t))return t.buffer;if(a.isURLSearchParams(t))return n.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),t.toString();let c;if(o){if(r.indexOf("application/x-www-form-urlencoded")>-1)return Wt(t,this.formSerializer).toString();if((c=a.isFileList(t))||r.indexOf("multipart/form-data")>-1){const f=this.env&&this.env.FormData;return W(c?{"files[]":t}:t,f&&new f,this.formSerializer)}}return o||s?(n.setContentType("application/json",!1),Xt(t)):t}],transformResponse:[function(t){const n=this.transitional||I.transitional,r=n&&n.forcedJSONParsing,s=this.responseType==="json";if(a.isResponse(t)||a.isReadableStream(t))return t;if(t&&a.isString(t)&&(r&&!this.responseType||s)){const i=!(n&&n.silentJSONParsing)&&s;try{return JSON.parse(t)}catch(c){if(i)throw c.name==="SyntaxError"?p.from(c,p.ERR_BAD_RESPONSE,this,null,this.response):c}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:T.classes.FormData,Blob:T.classes.Blob},validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};a.forEach(["delete","get","head","post","put","patch"],e=>{I.headers[e]={}});const Gt=a.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),Qt=e=>{const t={};let n,r,s;return e&&e.split(`
`).forEach(function(i){s=i.indexOf(":"),n=i.substring(0,s).trim().toLowerCase(),r=i.substring(s+1).trim(),!(!n||t[n]&&Gt[n])&&(n==="set-cookie"?t[n]?t[n].push(r):t[n]=[r]:t[n]=t[n]?t[n]+", "+r:r)}),t},ge=Symbol("internals");function U(e){return e&&String(e).trim().toLowerCase()}function H(e){return e===!1||e==null?e:a.isArray(e)?e.map(H):String(e)}function Zt(e){const t=Object.create(null),n=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let r;for(;r=n.exec(e);)t[r[1]]=r[2];return t}const Yt=e=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());function X(e,t,n,r,s){if(a.isFunction(r))return r.call(this,t,n);if(s&&(t=n),!!a.isString(t)){if(a.isString(r))return t.indexOf(r)!==-1;if(a.isRegExp(r))return r.test(t)}}function en(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(t,n,r)=>n.toUpperCase()+r)}function tn(e,t){const n=a.toCamelCase(" "+t);["get","set","has"].forEach(r=>{Object.defineProperty(e,r+n,{value:function(s,o,i){return this[r].call(this,t,s,o,i)},configurable:!0})})}class R{constructor(t){t&&this.set(t)}set(t,n,r){const s=this;function o(c,f,u){const l=U(f);if(!l)throw new Error("header name must be a non-empty string");const h=a.findKey(s,l);(!h||s[h]===void 0||u===!0||u===void 0&&s[h]!==!1)&&(s[h||f]=H(c))}const i=(c,f)=>a.forEach(c,(u,l)=>o(u,l,f));if(a.isPlainObject(t)||t instanceof this.constructor)i(t,n);else if(a.isString(t)&&(t=t.trim())&&!Yt(t))i(Qt(t),n);else if(a.isHeaders(t))for(const[c,f]of t.entries())o(f,c,r);else t!=null&&o(n,t,r);return this}get(t,n){if(t=U(t),t){const r=a.findKey(this,t);if(r){const s=this[r];if(!n)return s;if(n===!0)return Zt(s);if(a.isFunction(n))return n.call(this,s,r);if(a.isRegExp(n))return n.exec(s);throw new TypeError("parser must be boolean|regexp|function")}}}has(t,n){if(t=U(t),t){const r=a.findKey(this,t);return!!(r&&this[r]!==void 0&&(!n||X(this,this[r],r,n)))}return!1}delete(t,n){const r=this;let s=!1;function o(i){if(i=U(i),i){const c=a.findKey(r,i);c&&(!n||X(r,r[c],c,n))&&(delete r[c],s=!0)}}return a.isArray(t)?t.forEach(o):o(t),s}clear(t){const n=Object.keys(this);let r=n.length,s=!1;for(;r--;){const o=n[r];(!t||X(this,this[o],o,t,!0))&&(delete this[o],s=!0)}return s}normalize(t){const n=this,r={};return a.forEach(this,(s,o)=>{const i=a.findKey(r,o);if(i){n[i]=H(s),delete n[o];return}const c=t?en(o):String(o).trim();c!==o&&delete n[o],n[c]=H(s),r[c]=!0}),this}concat(...t){return this.constructor.concat(this,...t)}toJSON(t){const n=Object.create(null);return a.forEach(this,(r,s)=>{r!=null&&r!==!1&&(n[s]=t&&a.isArray(r)?r.join(", "):r)}),n}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([t,n])=>t+": "+n).join(`
`)}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(t){return t instanceof this?t:new this(t)}static concat(t,...n){const r=new this(t);return n.forEach(s=>r.set(s)),r}static accessor(t){const r=(this[ge]=this[ge]={accessors:{}}).accessors,s=this.prototype;function o(i){const c=U(i);r[c]||(tn(s,i),r[c]=!0)}return a.isArray(t)?t.forEach(o):o(t),this}}R.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);a.reduceDescriptors(R.prototype,({value:e},t)=>{let n=t[0].toUpperCase()+t.slice(1);return{get:()=>e,set(r){this[n]=r}}});a.freezeMethods(R);function G(e,t){const n=this||I,r=t||n,s=R.from(r.headers);let o=r.data;return a.forEach(e,function(c){o=c.call(n,o,s.normalize(),t?t.status:void 0)}),s.normalize(),o}function Me(e){return!!(e&&e.__CANCEL__)}function B(e,t,n){p.call(this,e??"canceled",p.ERR_CANCELED,t,n),this.name="CanceledError"}a.inherits(B,p,{__CANCEL__:!0});function ze(e,t,n){const r=n.config.validateStatus;!n.status||!r||r(n.status)?e(n):t(new p("Request failed with status code "+n.status,[p.ERR_BAD_REQUEST,p.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n))}function nn(e){const t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}function rn(e,t){e=e||10;const n=new Array(e),r=new Array(e);let s=0,o=0,i;return t=t!==void 0?t:1e3,function(f){const u=Date.now(),l=r[o];i||(i=u),n[s]=f,r[s]=u;let h=o,g=0;for(;h!==s;)g+=n[h++],h=h%e;if(s=(s+1)%e,s===o&&(o=(o+1)%e),u-i<t)return;const y=l&&u-l;return y?Math.round(g*1e3/y):void 0}}function sn(e,t){let n=0;const r=1e3/t;let s=null;return function(){const i=this===!0,c=Date.now();if(i||c-n>r)return s&&(clearTimeout(s),s=null),n=c,e.apply(null,arguments);s||(s=setTimeout(()=>(s=null,n=Date.now(),e.apply(null,arguments)),r-(c-n)))}}const M=(e,t,n=3)=>{let r=0;const s=rn(50,250);return sn(o=>{const i=o.loaded,c=o.lengthComputable?o.total:void 0,f=i-r,u=s(f),l=i<=c;r=i;const h={loaded:i,total:c,progress:c?i/c:void 0,bytes:f,rate:u||void 0,estimated:u&&c&&l?(c-i)/u:void 0,event:o,lengthComputable:c!=null};h[t?"download":"upload"]=!0,e(h)},n)},on=T.hasStandardBrowserEnv?function(){const t=/(msie|trident)/i.test(navigator.userAgent),n=document.createElement("a");let r;function s(o){let i=o;return t&&(n.setAttribute("href",i),i=n.href),n.setAttribute("href",i),{href:n.href,protocol:n.protocol?n.protocol.replace(/:$/,""):"",host:n.host,search:n.search?n.search.replace(/^\?/,""):"",hash:n.hash?n.hash.replace(/^#/,""):"",hostname:n.hostname,port:n.port,pathname:n.pathname.charAt(0)==="/"?n.pathname:"/"+n.pathname}}return r=s(window.location.href),function(i){const c=a.isString(i)?s(i):i;return c.protocol===r.protocol&&c.host===r.host}}():function(){return function(){return!0}}(),an=T.hasStandardBrowserEnv?{write(e,t,n,r,s,o){const i=[e+"="+encodeURIComponent(t)];a.isNumber(n)&&i.push("expires="+new Date(n).toGMTString()),a.isString(r)&&i.push("path="+r),a.isString(s)&&i.push("domain="+s),o===!0&&i.push("secure"),document.cookie=i.join("; ")},read(e){const t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove(e){this.write(e,"",Date.now()-864e5)}}:{write(){},read(){return null},remove(){}};function cn(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)}function ln(e,t){return t?e.replace(/\/?\/$/,"")+"/"+t.replace(/^\/+/,""):e}function Je(e,t){return e&&!cn(t)?ln(e,t):t}const Ee=e=>e instanceof R?{...e}:e;function L(e,t){t=t||{};const n={};function r(u,l,h){return a.isPlainObject(u)&&a.isPlainObject(l)?a.merge.call({caseless:h},u,l):a.isPlainObject(l)?a.merge({},l):a.isArray(l)?l.slice():l}function s(u,l,h){if(a.isUndefined(l)){if(!a.isUndefined(u))return r(void 0,u,h)}else return r(u,l,h)}function o(u,l){if(!a.isUndefined(l))return r(void 0,l)}function i(u,l){if(a.isUndefined(l)){if(!a.isUndefined(u))return r(void 0,u)}else return r(void 0,l)}function c(u,l,h){if(h in t)return r(u,l);if(h in e)return r(void 0,u)}const f={url:o,method:o,data:o,baseURL:i,transformRequest:i,transformResponse:i,paramsSerializer:i,timeout:i,timeoutMessage:i,withCredentials:i,withXSRFToken:i,adapter:i,responseType:i,xsrfCookieName:i,xsrfHeaderName:i,onUploadProgress:i,onDownloadProgress:i,decompress:i,maxContentLength:i,maxBodyLength:i,beforeRedirect:i,transport:i,httpAgent:i,httpsAgent:i,cancelToken:i,socketPath:i,responseEncoding:i,validateStatus:c,headers:(u,l)=>s(Ee(u),Ee(l),!0)};return a.forEach(Object.keys(Object.assign({},e,t)),function(l){const h=f[l]||s,g=h(e[l],t[l],l);a.isUndefined(g)&&h!==c||(n[l]=g)}),n}const Ve=e=>{const t=L({},e);let{data:n,withXSRFToken:r,xsrfHeaderName:s,xsrfCookieName:o,headers:i,auth:c}=t;t.headers=i=R.from(i),t.url=Ie(Je(t.baseURL,t.url),e.params,e.paramsSerializer),c&&i.set("Authorization","Basic "+btoa((c.username||"")+":"+(c.password?unescape(encodeURIComponent(c.password)):"")));let f;if(a.isFormData(n)){if(T.hasStandardBrowserEnv||T.hasStandardBrowserWebWorkerEnv)i.setContentType(void 0);else if((f=i.getContentType())!==!1){const[u,...l]=f?f.split(";").map(h=>h.trim()).filter(Boolean):[];i.setContentType([u||"multipart/form-data",...l].join("; "))}}if(T.hasStandardBrowserEnv&&(r&&a.isFunction(r)&&(r=r(t)),r||r!==!1&&on(t.url))){const u=s&&o&&an.read(o);u&&i.set(s,u)}return t},un=typeof XMLHttpRequest<"u",fn=un&&function(e){return new Promise(function(n,r){const s=Ve(e);let o=s.data;const i=R.from(s.headers).normalize();let{responseType:c}=s,f;function u(){s.cancelToken&&s.cancelToken.unsubscribe(f),s.signal&&s.signal.removeEventListener("abort",f)}let l=new XMLHttpRequest;l.open(s.method.toUpperCase(),s.url,!0),l.timeout=s.timeout;function h(){if(!l)return;const y=R.from("getAllResponseHeaders"in l&&l.getAllResponseHeaders()),m={data:!c||c==="text"||c==="json"?l.responseText:l.response,status:l.status,statusText:l.statusText,headers:y,config:e,request:l};ze(function(S){n(S),u()},function(S){r(S),u()},m),l=null}"onloadend"in l?l.onloadend=h:l.onreadystatechange=function(){!l||l.readyState!==4||l.status===0&&!(l.responseURL&&l.responseURL.indexOf("file:")===0)||setTimeout(h)},l.onabort=function(){l&&(r(new p("Request aborted",p.ECONNABORTED,s,l)),l=null)},l.onerror=function(){r(new p("Network Error",p.ERR_NETWORK,s,l)),l=null},l.ontimeout=function(){let d=s.timeout?"timeout of "+s.timeout+"ms exceeded":"timeout exceeded";const m=s.transitional||qe;s.timeoutErrorMessage&&(d=s.timeoutErrorMessage),r(new p(d,m.clarifyTimeoutError?p.ETIMEDOUT:p.ECONNABORTED,s,l)),l=null},o===void 0&&i.setContentType(null),"setRequestHeader"in l&&a.forEach(i.toJSON(),function(d,m){l.setRequestHeader(m,d)}),a.isUndefined(s.withCredentials)||(l.withCredentials=!!s.withCredentials),c&&c!=="json"&&(l.responseType=s.responseType),typeof s.onDownloadProgress=="function"&&l.addEventListener("progress",M(s.onDownloadProgress,!0)),typeof s.onUploadProgress=="function"&&l.upload&&l.upload.addEventListener("progress",M(s.onUploadProgress)),(s.cancelToken||s.signal)&&(f=y=>{l&&(r(!y||y.type?new B(null,e,l):y),l.abort(),l=null)},s.cancelToken&&s.cancelToken.subscribe(f),s.signal&&(s.signal.aborted?f():s.signal.addEventListener("abort",f)));const g=nn(s.url);if(g&&T.protocols.indexOf(g)===-1){r(new p("Unsupported protocol "+g+":",p.ERR_BAD_REQUEST,e));return}l.send(o||null)})},dn=(e,t)=>{let n=new AbortController,r;const s=function(f){if(!r){r=!0,i();const u=f instanceof Error?f:this.reason;n.abort(u instanceof p?u:new B(u instanceof Error?u.message:u))}};let o=t&&setTimeout(()=>{s(new p(`timeout ${t} of ms exceeded`,p.ETIMEDOUT))},t);const i=()=>{e&&(o&&clearTimeout(o),o=null,e.forEach(f=>{f&&(f.removeEventListener?f.removeEventListener("abort",s):f.unsubscribe(s))}),e=null)};e.forEach(f=>f&&f.addEventListener&&f.addEventListener("abort",s));const{signal:c}=n;return c.unsubscribe=i,[c,()=>{o&&clearTimeout(o),o=null}]},hn=function*(e,t){let n=e.byteLength;if(!t||n<t){yield e;return}let r=0,s;for(;r<n;)s=r+t,yield e.slice(r,s),r=s},pn=async function*(e,t,n){for await(const r of e)yield*hn(ArrayBuffer.isView(r)?r:await n(String(r)),t)},be=(e,t,n,r,s)=>{const o=pn(e,t,s);let i=0;return new ReadableStream({type:"bytes",async pull(c){const{done:f,value:u}=await o.next();if(f){c.close(),r();return}let l=u.byteLength;n&&n(i+=l),c.enqueue(new Uint8Array(u))},cancel(c){return r(c),o.return()}},{highWaterMark:2})},Se=(e,t)=>{const n=e!=null;return r=>setTimeout(()=>t({lengthComputable:n,total:e,loaded:r}))},$=typeof fetch=="function"&&typeof Request=="function"&&typeof Response=="function",ve=$&&typeof ReadableStream=="function",ee=$&&(typeof TextEncoder=="function"?(e=>t=>e.encode(t))(new TextEncoder):async e=>new Uint8Array(await new Response(e).arrayBuffer())),mn=ve&&(()=>{let e=!1;const t=new Request(T.origin,{body:new ReadableStream,method:"POST",get duplex(){return e=!0,"half"}}).headers.has("Content-Type");return e&&!t})(),Re=64*1024,te=ve&&!!(()=>{try{return a.isReadableStream(new Response("").body)}catch{}})(),z={stream:te&&(e=>e.body)};$&&(e=>{["text","arrayBuffer","blob","formData","stream"].forEach(t=>{!z[t]&&(z[t]=a.isFunction(e[t])?n=>n[t]():(n,r)=>{throw new p(`Response type '${t}' is not supported`,p.ERR_NOT_SUPPORT,r)})})})(new Response);const yn=async e=>{if(e==null)return 0;if(a.isBlob(e))return e.size;if(a.isSpecCompliantForm(e))return(await new Request(e).arrayBuffer()).byteLength;if(a.isArrayBufferView(e))return e.byteLength;if(a.isURLSearchParams(e)&&(e=e+""),a.isString(e))return(await ee(e)).byteLength},wn=async(e,t)=>{const n=a.toFiniteNumber(e.getContentLength());return n??yn(t)},gn=$&&(async e=>{let{url:t,method:n,data:r,signal:s,cancelToken:o,timeout:i,onDownloadProgress:c,onUploadProgress:f,responseType:u,headers:l,withCredentials:h="same-origin",fetchOptions:g}=Ve(e);u=u?(u+"").toLowerCase():"text";let[y,d]=s||o||i?dn([s,o],i):[],m,b;const S=()=>{!m&&setTimeout(()=>{y&&y.unsubscribe()}),m=!0};let x;try{if(f&&mn&&n!=="get"&&n!=="head"&&(x=await wn(l,r))!==0){let C=new Request(t,{method:"POST",body:r,duplex:"half"}),F;a.isFormData(r)&&(F=C.headers.get("content-type"))&&l.setContentType(F),C.body&&(r=be(C.body,Re,Se(x,M(f)),null,ee))}a.isString(h)||(h=h?"cors":"omit"),b=new Request(t,{...g,signal:y,method:n.toUpperCase(),headers:l.normalize().toJSON(),body:r,duplex:"half",withCredentials:h});let w=await fetch(b);const D=te&&(u==="stream"||u==="response");if(te&&(c||D)){const C={};["status","statusText","headers"].forEach(de=>{C[de]=w[de]});const F=a.toFiniteNumber(w.headers.get("content-length"));w=new Response(be(w.body,Re,c&&Se(F,M(c,!0)),D&&S,ee),C)}u=u||"text";let Xe=await z[a.findKey(z,u)||"text"](w,e);return!D&&S(),d&&d(),await new Promise((C,F)=>{ze(C,F,{data:Xe,headers:R.from(w.headers),status:w.status,statusText:w.statusText,config:e,request:b})})}catch(w){throw S(),w&&w.name==="TypeError"&&/fetch/i.test(w.message)?Object.assign(new p("Network Error",p.ERR_NETWORK,e,b),{cause:w.cause||w}):p.from(w,w&&w.code,e,b)}}),ne={http:Dt,xhr:fn,fetch:gn};a.forEach(ne,(e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch{}Object.defineProperty(e,"adapterName",{value:t})}});const Oe=e=>`- ${e}`,En=e=>a.isFunction(e)||e===null||e===!1,We={getAdapter:e=>{e=a.isArray(e)?e:[e];const{length:t}=e;let n,r;const s={};for(let o=0;o<t;o++){n=e[o];let i;if(r=n,!En(n)&&(r=ne[(i=String(n)).toLowerCase()],r===void 0))throw new p(`Unknown adapter '${i}'`);if(r)break;s[i||"#"+o]=r}if(!r){const o=Object.entries(s).map(([c,f])=>`adapter ${c} `+(f===!1?"is not supported by the environment":"is not available in the build"));let i=t?o.length>1?`since :
`+o.map(Oe).join(`
`):" "+Oe(o[0]):"as no adapter specified";throw new p("There is no suitable adapter to dispatch the request "+i,"ERR_NOT_SUPPORT")}return r},adapters:ne};function Q(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new B(null,e)}function Te(e){return Q(e),e.headers=R.from(e.headers),e.data=G.call(e,e.transformRequest),["post","put","patch"].indexOf(e.method)!==-1&&e.headers.setContentType("application/x-www-form-urlencoded",!1),We.getAdapter(e.adapter||I.adapter)(e).then(function(r){return Q(e),r.data=G.call(e,e.transformResponse,r),r.headers=R.from(r.headers),r},function(r){return Me(r)||(Q(e),r&&r.response&&(r.response.data=G.call(e,e.transformResponse,r.response),r.response.headers=R.from(r.response.headers))),Promise.reject(r)})}const $e="1.7.2",ue={};["object","boolean","number","function","string","symbol"].forEach((e,t)=>{ue[e]=function(r){return typeof r===e||"a"+(t<1?"n ":" ")+e}});const Ae={};ue.transitional=function(t,n,r){function s(o,i){return"[Axios v"+$e+"] Transitional option '"+o+"'"+i+(r?". "+r:"")}return(o,i,c)=>{if(t===!1)throw new p(s(i," has been removed"+(n?" in "+n:"")),p.ERR_DEPRECATED);return n&&!Ae[i]&&(Ae[i]=!0,console.warn(s(i," has been deprecated since v"+n+" and will be removed in the near future"))),t?t(o,i,c):!0}};function bn(e,t,n){if(typeof e!="object")throw new p("options must be an object",p.ERR_BAD_OPTION_VALUE);const r=Object.keys(e);let s=r.length;for(;s-- >0;){const o=r[s],i=t[o];if(i){const c=e[o],f=c===void 0||i(c,o,e);if(f!==!0)throw new p("option "+o+" must be "+f,p.ERR_BAD_OPTION_VALUE);continue}if(n!==!0)throw new p("Unknown option "+o,p.ERR_BAD_OPTION)}}const re={assertOptions:bn,validators:ue},N=re.validators;class P{constructor(t){this.defaults=t,this.interceptors={request:new we,response:new we}}async request(t,n){try{return await this._request(t,n)}catch(r){if(r instanceof Error){let s;Error.captureStackTrace?Error.captureStackTrace(s={}):s=new Error;const o=s.stack?s.stack.replace(/^.+\n/,""):"";try{r.stack?o&&!String(r.stack).endsWith(o.replace(/^.+\n.+\n/,""))&&(r.stack+=`
`+o):r.stack=o}catch{}}throw r}}_request(t,n){typeof t=="string"?(n=n||{},n.url=t):n=t||{},n=L(this.defaults,n);const{transitional:r,paramsSerializer:s,headers:o}=n;r!==void 0&&re.assertOptions(r,{silentJSONParsing:N.transitional(N.boolean),forcedJSONParsing:N.transitional(N.boolean),clarifyTimeoutError:N.transitional(N.boolean)},!1),s!=null&&(a.isFunction(s)?n.paramsSerializer={serialize:s}:re.assertOptions(s,{encode:N.function,serialize:N.function},!0)),n.method=(n.method||this.defaults.method||"get").toLowerCase();let i=o&&a.merge(o.common,o[n.method]);o&&a.forEach(["delete","get","head","post","put","patch","common"],d=>{delete o[d]}),n.headers=R.concat(i,o);const c=[];let f=!0;this.interceptors.request.forEach(function(m){typeof m.runWhen=="function"&&m.runWhen(n)===!1||(f=f&&m.synchronous,c.unshift(m.fulfilled,m.rejected))});const u=[];this.interceptors.response.forEach(function(m){u.push(m.fulfilled,m.rejected)});let l,h=0,g;if(!f){const d=[Te.bind(this),void 0];for(d.unshift.apply(d,c),d.push.apply(d,u),g=d.length,l=Promise.resolve(n);h<g;)l=l.then(d[h++],d[h++]);return l}g=c.length;let y=n;for(h=0;h<g;){const d=c[h++],m=c[h++];try{y=d(y)}catch(b){m.call(this,b);break}}try{l=Te.call(this,y)}catch(d){return Promise.reject(d)}for(h=0,g=u.length;h<g;)l=l.then(u[h++],u[h++]);return l}getUri(t){t=L(this.defaults,t);const n=Je(t.baseURL,t.url);return Ie(n,t.params,t.paramsSerializer)}}a.forEach(["delete","get","head","options"],function(t){P.prototype[t]=function(n,r){return this.request(L(r||{},{method:t,url:n,data:(r||{}).data}))}});a.forEach(["post","put","patch"],function(t){function n(r){return function(o,i,c){return this.request(L(c||{},{method:t,headers:r?{"Content-Type":"multipart/form-data"}:{},url:o,data:i}))}}P.prototype[t]=n(),P.prototype[t+"Form"]=n(!0)});class fe{constructor(t){if(typeof t!="function")throw new TypeError("executor must be a function.");let n;this.promise=new Promise(function(o){n=o});const r=this;this.promise.then(s=>{if(!r._listeners)return;let o=r._listeners.length;for(;o-- >0;)r._listeners[o](s);r._listeners=null}),this.promise.then=s=>{let o;const i=new Promise(c=>{r.subscribe(c),o=c}).then(s);return i.cancel=function(){r.unsubscribe(o)},i},t(function(o,i,c){r.reason||(r.reason=new B(o,i,c),n(r.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(t){if(this.reason){t(this.reason);return}this._listeners?this._listeners.push(t):this._listeners=[t]}unsubscribe(t){if(!this._listeners)return;const n=this._listeners.indexOf(t);n!==-1&&this._listeners.splice(n,1)}static source(){let t;return{token:new fe(function(s){t=s}),cancel:t}}}function Sn(e){return function(n){return e.apply(null,n)}}function Rn(e){return a.isObject(e)&&e.isAxiosError===!0}const se={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(se).forEach(([e,t])=>{se[t]=e});function Ke(e){const t=new P(e),n=xe(P.prototype.request,t);return a.extend(n,P.prototype,t,{allOwnKeys:!0}),a.extend(n,t,null,{allOwnKeys:!0}),n.create=function(s){return Ke(L(e,s))},n}const E=Ke(I);E.Axios=P;E.CanceledError=B;E.CancelToken=fe;E.isCancel=Me;E.VERSION=$e;E.toFormData=W;E.AxiosError=p;E.Cancel=E.CanceledError;E.all=function(t){return Promise.all(t)};E.spread=Sn;E.isAxiosError=Rn;E.mergeConfig=L;E.AxiosHeaders=R;E.formToJSON=e=>He(a.isHTMLForm(e)?new FormData(e):e);E.getAdapter=We.getAdapter;E.HttpStatusCode=se;E.default=E;window.axios=E;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";var oe=document.getElementById("theme-toggle-dark-icon"),ie=document.getElementById("theme-toggle-light-icon"),On=document.getElementById("theme-toggle");localStorage.getItem("color-theme")==="dark"||!("color-theme"in localStorage)&&window.matchMedia("(prefers-color-scheme: dark)").matches?(ie.classList.remove("hidden"),oe.classList.add("hidden")):(oe.classList.remove("hidden"),ie.classList.add("hidden"));On.addEventListener("click",function(){oe.classList.toggle("hidden"),ie.classList.toggle("hidden"),localStorage.getItem("color-theme")?localStorage.getItem("color-theme")==="light"?(document.documentElement.classList.add("dark"),localStorage.setItem("color-theme","dark")):(document.documentElement.classList.remove("dark"),localStorage.setItem("color-theme","light")):document.documentElement.classList.contains("dark")?(document.documentElement.classList.remove("dark"),localStorage.setItem("color-theme","light")):(document.documentElement.classList.add("dark"),localStorage.setItem("color-theme","dark"))});