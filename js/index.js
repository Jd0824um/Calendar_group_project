var Cal = function(divId)
{
	//Store div id
	this.divId = divId;

	// Days of week, starting on Sunday
	this.DaysOfWeek =
	[
	'Sun',
	'Mon',
	'Tue',
	'Wed',
	'Thu',
	'Fri',
	'Sat'
	];

	// Months, stating on January
	this.Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

	// Set the current month, year
	var d = new Date();

	this.currMonth = d.getMonth();
	this.currYear = d.getFullYear();
	this.currDay = d.getDate();
};


// Goes to next month
Cal.prototype.nextMonth = function()
{
	if (this.currMonth == 11)
	{
		this.currMonth = 0;
		this.currYear = this.currYear + 1;
	}
	else
	{
		this.currMonth = this.currMonth + 1;
	}
	this.showcurr();
};


// Goes to previous month
Cal.prototype.previousMonth = function()
{
	if ( this.currMonth == 0 )
	{
	this.currMonth = 11;
	this.currYear = this.currYear - 1;
	}
	else
	{
	this.currMonth = this.currMonth - 1;
	}
	this.showcurr();
};


// Show current month
Cal.prototype.showcurr = function()
{
	this.showMonth(this.currYear, this.currMonth);
	//alert("show curr");
};


// Show month (year, month)
Cal.prototype.showMonth = function(y, m)
{
	var d = new Date()
	// First day of the week in the selected month
	, firstDayOfMonth = new Date(y, m, 1).getDay()
	// Last day of the selected month
	, lastDateOfMonth =  new Date(y, m+1, 0).getDate()
	// Last day of the previous month
	, lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getDate() : new Date(y, m, 0).getDate();


	var html = '<table>';

	// Write selected month and year
	html += '<thead><tr>';
	html += '<td colspan="7">' + this.Months[m] + ' ' + y + '</td>';
	html += '</tr></thead>';


	// Write the header of the days of the week
	html += '<tr class="days">';
	for(var i = 0; i < this.DaysOfWeek.length; i++)
	{
		html += '<td>' + this.DaysOfWeek[i] + '</td>';
	}
	html += '</tr>';

	// Write the days
	var i = 1;
	do
	{
		var dow = new Date(y, m, i).getDay();

		// If Sunday, start new row
		if (dow == 0)
		{
		  html += '<tr>';
		}
		// If not Sunday but first day of the month
		// it will write the last days from the previous month
		else if (i == 1)
		{
		  html += '<tr>';
		  var k = lastDayOfLastMonth - firstDayOfMonth+1;
		  for (var j = 0; j < firstDayOfMonth; j++)
		  {
			  html += '<td class="not-current">' + k + '</td>';
			  k++;
		  }
		}

    // Write the current day in the loop
    var chk = new Date();
    var chkY = chk.getFullYear();
    var chkM = chk.getMonth();
	html += '<td class = "normal">' + '<b>' + i + '</b>';

	for (var x = 0; x < num_students; x++)
	{
		for (var b = 0; b < db_students[x].num_events; b++)
		{
			if (db_students[x].db_events[b].date_year == y && db_students[x].db_events[b].date_month == m && db_students[x].db_events[b].date_day == i)
			{
				var tid = "month= " + m;
				html += '<p></p>';
				html += '<button type="button" onclick="select_event(this)"' 
				html += 'data-value_nam="' + db_students[x].nam + '"';
				html += 'data-value_year="' + y + '"';
				html += 'data-value_month="' + m + '"';
				html += 'data-value_day="' + i + '"';
				html += 'data-value_time_from="' + db_students[x].db_events[b].time_from + '"';
				html += 'data-value_time_to="' + db_students[x].db_events[b].time_to + '"';
				html += 'data-value_notes="' + db_students[x].db_events[b].notes + '"';
				html += '>';
				//html += db_students[x].db_events[b].html;
				var ttime_from = get_formatted_time(db_students[x].db_events[b].time_from);
				var ttime_to = get_formatted_time(db_students[x].db_events[b].time_to);
				html += ttime_from + '-' + ttime_to + ' ';
				html += db_students[x].nam;
				html += '</button>';
			}
		}
	}

	html += '</td>';


    // If Saturday, closes the row
    if (dow == 6)
	{
      html += '</tr>';
    }
    // If not Saturday, but last day of the selected month
    // it will write the next few days from the next month
    else
	if (i == lastDateOfMonth)
	{
		var k = 1;
		for(dow; dow < 6; dow++)
		{
			html += '<td class="not-current">' + k + '</td>';
			k++;
		}
    }
    i++;
  }while(i <= lastDateOfMonth);

	// Closes table
	html += '</table>';

	// Write HTML to the div
	document.getElementById(this.divId).innerHTML = html;
	//alert(num_students);
};



function select_event(btn_evnt)
{
	if (selected_btn_event != null)
	{
		selected_btn_event.style = 'width:100%;background-color:#efefef;';
		//selected_btn_event.innerHTML = selected_event.html; //Orig html//
		var html = "";
		var ttime_from = get_formatted_time(selected_event.time_from);
		var ttime_to = get_formatted_time(selected_event.time_to);
		html += ttime_from + '-' + ttime_to + ' ';
		html += selected_event.nam;
		selected_btn_event.innerHTML = html;
	}
	selected_btn_event = btn_evnt;
	btn_evnt.style = 'width:100%;background-color:#40ff00;';
	
	for (var aa = 0; aa < num_students; aa++)
	{
		if (db_students[aa].nam == btn_evnt.getAttribute("data-value_nam"))
		{
			//alert("Found it: aa - " + aa);
			for (var bb = 0; bb < db_students[aa].num_events; bb++)
			{
				if (db_students[aa].db_events[bb].date_year == btn_evnt.getAttribute("data-value_year")
				&& db_students[aa].db_events[bb].date_month == btn_evnt.getAttribute("data-value_month")
				&& db_students[aa].db_events[bb].date_day == btn_evnt.getAttribute("data-value_day")
				&& db_students[aa].db_events[bb].time_from == btn_evnt.getAttribute("data-value_time_from")
				&& db_students[aa].db_events[bb].time_to == btn_evnt.getAttribute("data-value_time_to")
				&& db_students[aa].db_events[bb].notes == btn_evnt.getAttribute("data-value_notes"))
				{
					selected_event = db_students[aa].db_events[bb];
					//btn_evnt.innerHTML = db_students[aa].db_events[bb].html_with_notes;
					//lala

					var html = "";
					var ttime_from = get_formatted_time(selected_event.time_from);
					var ttime_to = get_formatted_time(selected_event.time_to);
					html += ttime_from + '-' + ttime_to + ' ';
					html += selected_event.nam;
					html += '<p>' + selected_event.notes + '</p>';
					btn_evnt.innerHTML = html;
				}
			}
		}
	}
}


function get_formatted_time(ttime)
{
	var ampm = 'A';
	var temp_hours = ttime.toString()[0] + ttime.toString()[1];
	var temp_minutes = ttime.toString()[3] + ttime.toString()[4];
	//alert(ttime + ' ' + temp_hours);
	if (temp_hours >= 12)
	{
		ampm = 'P';
		if (temp_hours >= 13)
			temp_hours -= 12;
	}
	else
	if (temp_hours < 1)
	{
		temp_hours = 12;
	}
	
	var ntime = temp_hours.toString() + ':' + temp_minutes.toString() + ampm;
	//alert(ntime);
	return ntime;
}


// On Load of the window
window.onload = () =>
{
	get_students();
	scheduler();
	// Start calendar
	c.showcurr();

	// Bind next and previous button clicks
	getId('btnNext').onclick = function()
	{
		c.nextMonth();
	};
	getId('btnPrev').onclick = function()
	{
		c.previousMonth();
	};
}


// Get element by id
function getId(id)
{
	return document.getElementById(id);
}


var c = new Cal("divCal");			
var db_students = [];
var num_students = 0;
var selected_student;
var selected_event;
var selected_btn_event;


class Student
{
	constructor(tnam)
	{
		this.nam = tnam;
		this.gui_btn = null;
		this.num_events = 0;
		this.db_events = [];
	}
}


class Evnt
{
	//constructor(tnam, tfrom, tto, tyear, tmonth, tday)
	constructor()
	{
		this.nam = "Event";
		this.time_from = "";
		this.time_to = "";
		this.date_year = 2022;
		this.date_month = 3;
		this.date_day = 28;
		this.notes = "";
		//this.html = "";
		//this.html_with_notes = "";
	}
}


function add_event()
{
	if (selected_student != null)
	{
		//**Get Form Values**//
		var time_from = document.getElementById("time_from").value;
		var time_to = document.getElementById("time_to").value;
		var date_from = document.getElementById("date_from").value;
		var date_to = document.getElementById("date_to").value;
		var how_often = document.getElementById("how_often").value;
		var day_of_week = document.getElementById("day_of_week").value;
		var event_notes = document.getElementById("event_notes").value;

		//Regex to replace dashes with fwd slashes, this is a weird confusing thing that otherwise will put the dates in the calendar 1 day early//
		date_from = date_from.replace(/-/, '/')  // replace 1st "-" with "/"
                             .replace(/-/, '/'); // replace 2nd "-" with "/"

		if (how_often == "once")
		{
			var tevent = new Evnt();
			tevent.nam = selected_student.nam;
			tevent.date_year = new Date(date_from).getFullYear();
			tevent.date_month = new Date(date_from).getMonth();
			tevent.date_day = new Date(date_from).getDate();
			tevent.time_from = time_from;
			tevent.time_to = time_to;
			tevent.notes = event_notes;

			//Preset the html & html _with_notes for the button (when highlighted)//
			// var html = "";
			// var ttime_from = get_formatted_time(time_from);
			// var ttime_to = get_formatted_time(time_to);
			// html += ttime_from + '-' + ttime_to + ' ';
			// html += tevent.nam;
			// tevent.html = html;
			// html += '<p>' + tevent.notes + '</p>';
			// tevent.html_with_notes = html;			
			
			selected_student.db_events[selected_student.num_events] = tevent;
			selected_student.num_events++;
		}
		else
		if (how_often == "weekly")
		{
			//current_date.getDay() is 0-6 days of week
			//getDate() is day of month (0-30 or whatever) //lala
			var db_dates = get_dates(new Date(date_from), new Date(date_to));
			for (var x = 0; x < db_dates.length; x++)
			{
				if (db_dates[x].getDay() == day_of_week)
				{
					var tevent = new Evnt();
					tevent.nam = selected_student.nam;
					tevent.date_year = db_dates[x].getFullYear();
					tevent.date_month = db_dates[x].getMonth();
					tevent.date_day = db_dates[x].getDate();
					tevent.time_from = time_from;
					tevent.time_to = time_to;
					tevent.notes = event_notes;
					
					//Preset the html & html _with_notes for the button (when highlighted)//
					// var html = "";
					// var ttime_from = get_formatted_time(time_from);
					// var ttime_to = get_formatted_time(time_to);
					// html += ttime_from + '-' + ttime_to + ' ';
					// html += tevent.nam;
					// tevent.html = html;
					// html += '<p>' + tevent.notes + '</p>';
					// tevent.html_with_notes = html;			

					selected_student.db_events[selected_student.num_events] = tevent;
					selected_student.num_events++;
				}
			}
		}
		else
		if (how_often == "biweekly")
		{
			var db_dates = get_dates(new Date(date_from), new Date(date_to));
			var eo = false;
			for (var x = 0; x < db_dates.length; x++)
			{
				if (db_dates[x].getDay() == day_of_week)
				{
					if (eo == false)
					{
						eo = true;
						var tevent = new Evnt();
						tevent.nam = selected_student.nam;
						tevent.date_year = db_dates[x].getFullYear();
						tevent.date_month = db_dates[x].getMonth();
						tevent.date_day = db_dates[x].getDate();
						tevent.time_from = time_from;
						tevent.time_to = time_to;
						tevent.notes = event_notes;
						
						//Preset the html & html _with_notes for the button (when highlighted)//
						// var html = "";
						// var ttime_from = get_formatted_time(time_from);
						// var ttime_to = get_formatted_time(time_to);
						// html += ttime_from + '-' + ttime_to + ' ';
						// html += tevent.nam;
						// tevent.html = html;
						// html += '<p>' + tevent.notes + '</p>';
						// tevent.html_with_notes = html;
						
						selected_student.db_events[selected_student.num_events] = tevent;
						selected_student.num_events++;
					}
					else
					//if (eo == true)
					{
						eo = false;
					}
				}
			}
		}
		else
		if (how_often == "monthly")
		{
			var db_dates = get_dates(new Date(date_from), new Date(date_to));
			
			var date_start = new Date(date_from);
			var ndow = date_start.getDay();
			var nweek = date_start.getDate();
			//alert(date_start + " " + ndow);

			nweek = nweek / 7;
			if (nweek > 5)
				nweek = 5;
			else
			if (nweek > 4)
				nweek = 4;
			else
			if (nweek > 3)
				nweek = 3;
			else
			if (nweek > 2)
				nweek = 2;
			else
			if (nweek > 1)
				nweek = 1;
			else
				nweek = 0;
			
			for (var x = 0; x < db_dates.length; x++)
			{
				if (db_dates[x].getDay() == ndow)
				{
					var tweek = db_dates[x].getDate();
					tweek = tweek / 7;
					if (tweek > 5)
						tweek = 5;
					else
					if (tweek > 4)
						tweek = 4;
					else
					if (tweek > 3)
						tweek = 3;
					else
					if (tweek > 2)
						tweek = 2;
					else
					if (tweek > 1)
						tweek = 1;
					else
						tweek = 0;
					
					if (tweek == nweek)
					{
						var tevent = new Evnt();
						tevent.nam = selected_student.nam;
						tevent.date_year = db_dates[x].getFullYear();
						tevent.date_month = db_dates[x].getMonth();
						tevent.date_day = db_dates[x].getDate();
						tevent.time_from = time_from;
						tevent.time_to = time_to;
						tevent.notes = event_notes;
						
						//Preset the html & html _with_notes for the button (when highlighted)//
						// var html = "";
						// var ttime_from = get_formatted_time(time_from);
						// var ttime_to = get_formatted_time(time_to);
						// html += ttime_from + '-' + ttime_to + ' ';
						// html += tevent.nam;
						// tevent.html = html;
						// html += '<p>' + tevent.notes + '</p>';
						// tevent.html_with_notes = html;
						
						selected_student.db_events[selected_student.num_events] = tevent;
						selected_student.num_events++;
					}
				}
			}
		}
		else
		if (how_often == "daily")
		{
			//var db_dates = get_dates(new Date(), (new Date()).addDays(2));
			var db_dates = get_dates(new Date(date_from), new Date(date_to));
			for (var x = 0; x < db_dates.length; x++)
			{
				var tevent = new Evnt();
				tevent.nam = selected_student.nam;
				tevent.date_year = db_dates[x].getFullYear();
				tevent.date_month = db_dates[x].getMonth();
				tevent.date_day = db_dates[x].getDate();
				tevent.time_from = time_from;
				tevent.time_to = time_to;
				tevent.notes = event_notes;
				
				//Preset the html & html _with_notes for the button (when highlighted)//
				// var html = "";
				// var ttime_from = get_formatted_time(time_from);
				// var ttime_to = get_formatted_time(time_to);
				// html += ttime_from + '-' + ttime_to + ' ';
				// html += tevent.nam;
				// tevent.html = html;
				// html += '<p>' + tevent.notes + '</p>';
				// tevent.html_with_notes = html;
				
				selected_student.db_events[selected_student.num_events] = tevent;
				selected_student.num_events++;
			}
		}
		selected_student.db_events.sort((a, b) => (a.time_from > b.time_from) ? 1 : -1)
		c.showcurr();
	}
}


function remove_event()
{
	if (selected_event != null)
	{
		for (var aa = 0; aa < num_students; aa++)
		{
			if (db_students[aa].nam == selected_event.nam)
			{
				for (var bb = 0; bb < db_students[aa].num_events; bb++)
				{
					if (db_students[aa].db_events[bb] == selected_event)
					{
						//alert("index: " + tz);
						db_students[aa].db_events[bb] = db_students[aa].db_events[db_students[aa].num_events - 1];
						//db_students[aa].db_events[db_students[aa].num_events - 1] = null;
						db_students[aa].num_events--;
						//db_students[aa].db_events.sort((a, b) => (a.time_from > b.time_from) ? 1 : -1)
						break;
					}
				}
			}
		}
		//selected_event.(student).db_events.sort((a, b) => (a.time_from > b.time_from) ? 1 : -1)
		c.showcurr();
	}
}



Date.prototype.addDays = function(days)
{
	var dat = new Date(this.valueOf())
	dat.setDate(dat.getDate() + days);
	return dat;
}


function get_dates(date_from, date_to)
{
	var db_dates = new Array();
	var current_date = date_from;
	while (current_date <= date_to)
	{
		db_dates.push(current_date)
		current_date = current_date.addDays(1);
	}
	return db_dates;
}


	/*
	var dateArray = getDates(new Date(), (new Date()).addDays(2));
	for (i = 0; i < dateArray.length; i ++ )
	{
		alert(dateArray[i]);
	}
	*/

function get_students() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET','CalendarMethods.php?function=getStudents');
	xhr.onload = function() {
		JSON.parse(this.response).forEach(student => {
			db_students[num_students] = new Student(student.studentFullName);
			num_students++;
		});
		display_students();
	}

	xhr.setRequestHeader('Content-type', 'application/json');
	xhr.send();
}

function add_student()
{
	var nam = document.getElementById("student_name").value;
	if (nam.length > 0)
	{
		var xhr = new XMLHttpRequest();
		xhr.open('POST','CalendarMethods.php?function=addStudent');
		xhr.onload = function() {
			console.log('Added student');

			db_students[num_students] = new Student(nam);
			selected_student = db_students[num_students];
			num_students++;
			display_students();	
			c.showcurr();
		}

		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.send("studentFullName=" + nam);
	}
}


function remove_student()
{
	if (selected_student != null)
	{
		var xhr = new XMLHttpRequest();
		xhr.open('POST','CalendarMethods.php?function=removeStudent');
		xhr.onload = function() {
			console.log('Removed student');

			db_students = [];
			num_students = 0;
			get_students();	
			c.showcurr();
		}

		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.send("studentFullName=" + selected_student.nam);
	}
}


function select_student(btn)
{
	for (var z = 0; z < num_students; z++)
	{
		if (db_students[z].nam == btn.innerHTML)
			selected_student = db_students[z];
	}
	display_students();
	//btn.style = 'width:100%;background-color:#40ff00;';
}


function display_students()
{
	var html = "<table>";
	//html += "<table>";
	html += '<h1 style="font-size:1.5vw"><center>Students</center></h1>'
	html += '<p></p>'
	html += '<input type="text" id="student_name" name="student_name" placeholder="Student Name">'
	html += '<p></p>'
	html += '<button type="button" onclick="add_student()" style="background-color:black;color:green;width:3vw;height:3vw;font-size:2vw">+</button>';
	html += '<button type="button" onclick="remove_student()" style="background-color:black;color:red;width:3vw;height:3vw;font-size:2vw">-</button><br>';
	
	html += '<table style="background-color:#000000;"><tr></tr><tr><td>'

	for (var x = 0; x < num_students; x++)
	{
		if (db_students[x] == selected_student)
		{
			html += '<button onclick="select_student(this)" style="width:100%; background-color:#40ff00;" type="button">'
			html += db_students[x].nam;
			html == '</button><br>';
		}
		else
		{
			html += '<button onclick="select_student(this)" style="width:100%" type="button">'
			html += db_students[x].nam;
			html == '</button><br>';
		}
	}
	
	html += '</td></tr></table>'

	document.getElementById("divStudents").innerHTML = html;
}


function do_click()
{
    var dialog = document.getElementById('myFirstDialog');
    document.getElementById('show').onclick = function()
	{
        dialog.show();
    };
    document.getElementById('hide').onclick = function()
	{
        dialog.close();
    };
}


function scheduler()
{
	var html = "<table>";
	html += '<h1 style="font-size:1.5vw"><center>Schedule</center></h1>'
	html += '<label for="time_from"></label><input type="time" value="13:00" id="time_from" name="time_from">'
	html += '<label for="time_to"></label><input type="time" value="13:30" id="time_to" name="time_to"><br>'
	html += '<label for="how_often"></label><select name="how_often" id="how_often"><option value="daily">Daily</option><option selected value="weekly">Weekly</option><option value="biweekly">Bi-Weekly</option><option value="monthly">Monthly</option><option value="once">One Time</option></select><br>'
	html += '<label for="day_of_week"></label><select name="day_of_week" id="day_of_week"><option value="1">Monday</option><option value="2">Tuesday</option><option value="3">Wednesday</option><option value="4">Thursday</option><option value="5">Friday</option><option value="6">Saturday</option><option value="0">Sunday</option></select><br>'
	html += '&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbspStart &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp End<br>';
	html += '<label for="date_from"></label><input type="date" value="2022-03-03" id="date_from" name="date_from">'
	html += '<label for="date_to"></label><input type="date" value="2022-03-28" id="date_to" name="date_to"><br>'
	html +=	'<textarea name="event_notes" id="event_notes" cols="40" placeholder="Additional Notes" rows="5"></textarea><br>'

	html += '<button type="button" onclick="add_event()"  style="background-color:black;color:green;width:3vw;height:3vw;font-size:2vw">+</button>';
	html += '<button type="button" onclick="remove_event()" style="background-color:black;color:red;width:3vw;height:3vw;font-size:2vw">-</button><br>';
	
	//html += '<div><dialog id="myFirstDialog" style="width:50%;background-color:#F4FFEF;border:1px dotted black;">   <p><q>Words and stuff. </q></p><button id="hide">Close</button></dialog><button id="show" onclick="do_click()">Show Dialog</button></div>'
	
	document.getElementById("divScheduler").innerHTML = html;
	document.getElementById('date_from').valueAsDate = new Date();
	document.getElementById('date_to').valueAsDate = new Date().addDays(7);
}
