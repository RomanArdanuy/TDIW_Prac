"use strict";(function(){function f(e){const r=[];typeof e=="number"&&r.push("code/timeOrigin",e);function t(o){r.push(o,Date.now())}function m(){const o=[];for(let i=0;i<r.length;i+=2)o.push({name:r[i],startTime:r[i+1]});return o}return{mark:t,getMarks:m}}function c(){if(typeof performance=="object"&&typeof performance.mark=="function"&&!performance.nodeTiming)return typeof performance.timeOrigin!="number"&&!performance.timing?f():{mark(e){performance.mark(e)},getMarks(){let e=performance.timeOrigin;typeof e!="number"&&(e=performance.timing.navigationStart||performance.timing.redirectStart||performance.timing.fetchStart);const r=[{name:"code/timeOrigin",startTime:Math.round(e)}];for(const t of performance.getEntriesByType("mark"))r.push({name:t.name,startTime:Math.round(e+t.startTime)});return r}};if(typeof process=="object"){const e=performance?.timeOrigin??Math.round((require.__$__nodeRequire||require)("perf_hooks").performance.timeOrigin);return f(e)}else return console.trace("perf-util loaded in UNKNOWN environment"),f()}function a(e){return e.MonacoPerformanceMarks||(e.MonacoPerformanceMarks=c()),e.MonacoPerformanceMarks}var n;typeof global=="object"?n=global:typeof self=="object"?n=self:n={},typeof define=="function"?define([],function(){return a(n)}):typeof module=="object"&&typeof module.exports=="object"?module.exports=a(n):(console.trace("perf-util defined in UNKNOWN context (neither requirejs or commonjs)"),n.perf=a(n))})();

//# sourceMappingURL=https://ticino.blob.core.windows.net/sourcemaps/e7e037083ff4455cf320e344325dacb480062c3c/core/vs/base/common/performance.js.map
