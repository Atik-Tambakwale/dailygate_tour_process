var path = $("#host").val();

function load_toturial_video() {
    var search=$("#search_video").val();
    var csrf_test_name = $.cookie('csrf_cookie_name');
	$.ajax({
		url: path + "tutotial/get_videos",
		type: "GET",
		dataType: "JSON",
        headers: {
			"Authorization": $.cookie("jwt")
		},
        data: {
			csrf_test_name,search
		},

		success: function (json) {
            console.log(json);
            $("#messenger").html(json.data.messager);
            $("#task").html(json.data.tasks);
            $("#request").html(json.data.request);
            $("#decision").html(json.data.desicion);
            $("#notice").html(json.data.notice);
            $("#others").html(json.data.other);
            $("#comment").html(json.data.comment);
            $("#search").html(json.data.search_videos);
		},
		error: function (jqXHR, exception) {
			toastr.error('Server Error '+jqXHR.status+' code', 'exception is '+exception+' On DailyGate Toturial View');
	   	}
	})
}
