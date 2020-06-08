$(function() {

	var todayDate = moment().startOf('day');
	var YM = todayDate.format('YYYY-MM');
	var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
	var TODAY = todayDate.format('YYYY-MM-DD');
	var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

	$('#calendar').fullCalendar({
		header: {
			left: 'today',
			center: 'title',
			right: 'prev,next '
		},
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		navLinks: true,
		backgroundColor: '#1f2e86',   
		eventTextColor: '#1f2e86',
		textColor: '#378006',
		dayClick: function(date, jsEvent, view) {

        alert('Clicked on: ' + date.format());

        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

        alert('Current view: ' + view.name);

        // change the day's background color just for fun
        $(this).css('background-color', 'red');

    },
		events: [
			{
				title: 'Meeting + brainstormsessie',
				start: TODAY + 'T09:30:00',
				end: TODAY + 'T16:30:00',
				color: '#1f2e86'
			},
			{
				id: 999,
				title: 'Feedback meeting',
				start: YM + '-15T09:30:00',
				color: '#1f2e86'
			},
			{
				id: 999,
				title: 'Oplevering sprint 2',
				start: YM + '-24T11:00:00',
				color: '#65b12d'
			}
		]
	});
});