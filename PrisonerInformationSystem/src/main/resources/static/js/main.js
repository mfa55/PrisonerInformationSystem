/**
 * Created by hallak on 4/22/2017.
 */

$(document).ready(function(){
    var prisonersTable = $('#prisonersTable').DataTable({
        serverSide: true,
        dom: 'T<"clear">lfrtip',
        paging: true,
        "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
        "search": {
            "regex": true
        },
        "ajax": function(data, callback, settings){
            var url = "/prisoners";

            var request = $.ajax({
                "url": url,
                "data": {
                    size: data.length,
                    sort: data.columns[data.order[0].column].data + ',' + data.order[0].dir,
                    page: (data.start == 0) ? 0 : (data.start / data.length)
                }
            });

            request.done(function(json){
                var result = {};

                result.data = json._embedded.prisoners;

                if(json.page != null){
                    result.recordsTotal = json.page.totalElements;
                    result.recordsFiltered = json.page.totalElements;
                }
                callback(result);
            });
        },
        "columns" : [
            { "data": 'ssn'},
            { "data": 'firstName'},
            { "data": 'lastName'},
            { "data": 'gender'},
            { "data": 'address'},
            { "data": 'phoneNumber'},
            { "data": 'prisonSentence'},
            { "data": 'birthDate'},
            { "data": 'entryDate'},
            { "data": 'releaseDate'},
            { "data": 'phoneCallsAllowed'},
            { "data": 'visitsAllowed'}
        ]
    });

    var visitorsTable = $('#visitorsTable').DataTable({
        serverSide: true,
        dom: 'T<"clear">lfrtip',
        paging: true,
        "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
        "search": {
            "regex": true
        },
        "ajax": function(data, callback, settings){
            var url = "/visitors";

            var request = $.ajax({
                "url": url,
                "data": {
                    size: data.length,
                    sort: data.columns[data.order[0].column].data + ',' + data.order[0].dir,
                    page: (data.start == 0) ? 0 : (data.start / data.length)
                }
            });

            request.done(function(json){
                var result = {};

                result.data = json._embedded.visitors;

                if(json.page != null){
                    result.recordsTotal = json.page.totalElements;
                    result.recordsFiltered = json.page.totalElements;
                }
                callback(result);
            });
        },
        "columns" : [
            { "data": 'id'},
            { "data": 'firstName'},
            { "data": 'lastName'},
            { "data": 'gender'},
            { "data": 'birthDate'}
        ]
    });

    var staffTable = $('#staffTable').DataTable({
        serverSide: true,
        dom: 'T<"clear">lfrtip',
        paging: true,
        "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
        "search": {
            "regex": true
        },
        "ajax": function(data, callback, settings){
            var url = "/staffs";

            var request = $.ajax({
                "url": url,
                "data": {
                    size: data.length,
                    sort: data.columns[data.order[0].column].data + ',' + data.order[0].dir,
                    page: (data.start == 0) ? 0 : (data.start / data.length)
                }
            });

            request.done(function(json){
                var result = {};

                result.data = json._embedded.staffs;

                if(json.page != null){
                    result.recordsTotal = json.page.totalElements;
                    result.recordsFiltered = json.page.totalElements;
                }
                callback(result);
            });
        },
        "columns" : [
            { "data": 'id'},
            { "data": 'firstName'},
            { "data": 'lastName'},
            { "data": 'gender'},
            { "data": 'birthDate'}
        ]
    });

    var victimsTable = $('#victimsTable').DataTable({
        serverSide: true,
        dom: 'T<"clear">lfrtip',
        paging: true,
        "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
        "search": {
            "regex": true
        },
        "ajax": function(data, callback, settings){
            var url = "/victims";

            var request = $.ajax({
                "url": url,
                "data": {
                    size: data.length,
                    sort: data.columns[data.order[0].column].data + ',' + data.order[0].dir,
                    page: (data.start == 0) ? 0 : (data.start / data.length)
                }
            });

            request.done(function(json){
                var result = {};

                result.data = json._embedded.victims;

                if(json.page != null){
                    result.recordsTotal = json.page.totalElements;
                    result.recordsFiltered = json.page.totalElements;
                }
                callback(result);
            });
        },
        "columns" : [
            { "data": 'id'},
            { "data": 'firstName'},
            { "data": 'lastName'},
            { "data": 'gender'},
            { "data": 'birthDate'}
        ]
    });
});