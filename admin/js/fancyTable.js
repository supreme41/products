/*!
 * jQuery fancyTable plugin v1.0.20
 * https://github.com/myspace-nu
 *
 * Copyright 2018 Johan Johansson
 * Released under the MIT license
 */

!function(i){i.fn.fancyTable=function(a){var l=i.extend({inputStyle:"",inputPlaceholder:"Search...",pagination:!1,paginationClass:"btn btn-light",paginationClassActive:"active",pagClosest:3,perPage:10,sortable:!0,searchable:!0,onInit:function(){},onUpdate:function(){},testing:!1},a),r=this;return this.settings=l,this.tableUpdate=function(n){if(n.fancyTable.matches=0,i(n).find("tbody tr").each(function(){var a=0,e=!0,t=!1;i(this).find("td").each(function(){l.globalSearch||!n.fancyTable.searchArr[a]||new RegExp(n.fancyTable.searchArr[a],"i").test(i(this).html())?!l.globalSearch||n.fancyTable.search&&!new RegExp(n.fancyTable.search,"i").test(i(this).html())||Array.isArray(l.globalSearchExcludeColumns)&&l.globalSearchExcludeColumns.includes(a+1)||(t=!0):e=!1,a++}),l.globalSearch&&t||!l.globalSearch&&e?(n.fancyTable.matches++,!l.pagination||n.fancyTable.matches>n.fancyTable.perPage*(n.fancyTable.page-1)&&n.fancyTable.matches<=n.fancyTable.perPage*n.fancyTable.page?i(this).show():i(this).hide()):i(this).hide()}),n.fancyTable.pages=Math.ceil(n.fancyTable.matches/n.fancyTable.perPage),l.pagination){var a=n.fancyTable.paginationElement?i(n.fancyTable.paginationElement):i(n).find(".pag");a.empty();for(var e,t=1;t<=n.fancyTable.pages;t++)(1==t||t>n.fancyTable.page-(l.pagClosest+1)&&t<n.fancyTable.page+(l.pagClosest+1)||t==n.fancyTable.pages)&&(e=i("<a>",{html:t,"data-n":t,style:"margin:0.2em",class:l.paginationClass+" "+(t==n.fancyTable.page?l.paginationClassActive:"")}).css("cursor","pointer").bind("click",function(){n.fancyTable.page=i(this).data("n"),r.tableUpdate(n)}),t==n.fancyTable.pages&&n.fancyTable.page<n.fancyTable.pages-l.pagClosest-1&&a.append(i("<span>...</span>")),a.append(e),1==t&&n.fancyTable.page>l.pagClosest+2&&a.append(i("<span>...</span>")))}l.onUpdate.call(this,n)},this.reinit=function(a){i(this).each(function(){i(this).find("th a").contents().unwrap(),i(this).find("tr.fancySearchRow").remove()}),i(this).fancyTable(this.settings)},this.tableSort=function(t){var a;void 0!==t.fancyTable.sortColumn&&t.fancyTable.sortColumn<t.fancyTable.nColumns&&(i(t).find("thead th div.sortArrow").each(function(){i(this).remove()}),(a=i("<div>",{class:"sortArrow"}).css({margin:"0.1em",display:"inline-block",width:0,height:0,"border-left":"0.4em solid transparent","border-right":"0.4em solid transparent"})).css(0<t.fancyTable.sortOrder?{"border-top":"0.4em solid #000"}:{"border-bottom":"0.4em solid #000"}),i(t).find("thead th a").eq(t.fancyTable.sortColumn).append(a),a=i(t).find("tbody tr").toArray().sort(function(a,e){a=i(a).find("td").eq(t.fancyTable.sortColumn),e=i(e).find("td").eq(t.fancyTable.sortColumn),a=i(a).data("sortvalue")?i(a).data("sortvalue"):a.html(),e=i(e).data("sortvalue")?i(e).data("sortvalue"):e.html();return"case-insensitive"==t.fancyTable.sortAs[t.fancyTable.sortColumn]&&(a=a.toLowerCase(),e=e.toLowerCase()),"numeric"==t.fancyTable.sortAs[t.fancyTable.sortColumn]?0<t.fancyTable.sortOrder?parseFloat(a)-parseFloat(e):parseFloat(e)-parseFloat(a):a<e?-t.fancyTable.sortOrder:e<a?t.fancyTable.sortOrder:0}),i(t).find("tbody").empty().append(a))},this.each(function(){if("TABLE"!==i(this).prop("tagName"))return console.warn("fancyTable: Element is not a table."),!0;var t,a,e,n,s=this;s.fancyTable={nColumns:i(s).find("td").first().parent().find("td").length,nRows:i(this).find("tbody tr").length,perPage:l.perPage,page:1,pages:0,matches:0,searchArr:[],search:"",sortColumn:l.sortColumn,sortOrder:void 0!==l.sortOrder&&(new RegExp("desc","i").test(l.sortOrder)||-1==l.sortOrder)?-1:1,sortAs:[],paginationElement:l.paginationElement},0==i(s).find("tbody").length&&(e=i(s).html(),i(s).empty(),i(s).append("<tbody>").append(i(e))),0==i(s).find("thead").length&&i(s).prepend(i("<thead>")),l.sortable&&(n=0,i(s).find("thead th").each(function(){s.fancyTable.sortAs.push("numeric"==i(this).data("sortas")?"numeric":"case-insensitive"==i(this).data("sortas")?"case-insensitive":null);var a=i(this).html(),a=i("<a>",{html:a,"data-n":n,class:""}).css("cursor","pointer").bind("click",function(){s.fancyTable.sortColumn==i(this).data("n")?s.fancyTable.sortOrder=-s.fancyTable.sortOrder:s.fancyTable.sortOrder=1,s.fancyTable.sortColumn=i(this).data("n"),r.tableSort(s),r.tableUpdate(s)});i(this).empty(),i(this).append(a),n++})),l.searchable&&(t=i("<tr>").addClass("fancySearchRow"),l.globalSearch?(a=i("<input>",{placeholder:l.inputPlaceholder,style:"width:100%;"+l.inputStyle}).bind("change paste keyup",function(){s.fancyTable.search=i(this).val(),s.fancyTable.page=1,r.tableUpdate(s)}),e=i("<th>",{style:"padding:2px;"}).attr("colspan",s.fancyTable.nColumns),i(a).appendTo(i(e)),i(e).appendTo(i(t))):(n=0,i(s).find("td").first().parent().find("td").each(function(){s.fancyTable.searchArr.push("");var a=i("<input>",{"data-n":n,placeholder:l.inputPlaceholder,style:"width:100%;"+l.inputStyle}).bind("change paste keyup",function(){s.fancyTable.searchArr[i(this).data("n")]=i(this).val(),s.fancyTable.page=1,r.tableUpdate(s)}),e=i("<th>",{style:"padding:2px;"});i(a).appendTo(i(e)),i(e).appendTo(i(t)),n++})),t.appendTo(i(s).find("thead"))),r.tableSort(s),l.pagination&&!l.paginationElement&&(i(s).find("tfoot").remove(),i(s).append(i("<tfoot><tr></tr></tfoot>")),i(s).find("tfoot tr").append(i("<td class='pag'></td>",{}).attr("colspan",s.fancyTable.nColumns))),r.tableUpdate(s),l.onInit.call(this,s)}),this}}(jQuery);