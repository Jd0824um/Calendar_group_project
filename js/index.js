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
    if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay)
	{
		html += '<td class="today">' + i; //+ '</td>';
		for (var x = 0; x < 3; x++)
		{
			html += '<button type="button">Click Me!</button>'
		}
		html += '</td>';
    }
	else
	{
		html += '<td class = "normal">' + '<b>' + i + '</b>';
		for (var x = 0; x < 3; x++)
		{
			html += '<button type="button">Click Me!</button>'
		}
		html += '</td>';
    }
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
};


// On Load of the window
window.onload = function()
{
	students();
	scheduler();
	// Start calendar
	var c = new Cal("divCal");			
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


var db_students = [];
var num_students = 0;


class Student
{
  constructor(name)
  {
    this.nam = name;
	this.gui_btn = null;
	this.db_events = [];
  }
}


class Evnt
{
  constructor(tfrom, tto, date)
  {
    this.time_from = tfrom;
	this.time_to = tto;
	this.date = date;
  }
}


function add_student()
{
	//btn.style = 'width:100%;background-color:#40ff00;';
	db_students[num_students] = new Student("John F");
	num_students++;
	students();
	//alert(num_students);
}


function set_color(btn)
{
	btn.style = 'width:100%;background-color:#40ff00;';
}


function students()
{
	var html = "<table>";
	html += '<h1 style="font-size:1.5vw"><center>Students</center></h1>'
	html += '<button type="button" onclick="add_student()" style="background-color:black;color:green;width:3vw;height:3vw;font-size:2vw">+</button>';
	html += '<button type="button" style="background-color:black;color:red;width:3vw;height:3vw;font-size:2vw">-</button><br>';
	
	html += '<table style="background-color:#000000;"><tr></tr><tr><td>'

	for (var x = 0; x < num_students; x++)
	{
		html += '<button onclick="set_color(this)" style="width:100%" type="button">'
		html += db_students[x].nam;
		html == '</button><br>';
	}
	
	html += '</td></tr></table>'

	document.getElementById("divStudents").innerHTML = html;
}


function scheduler()
{
	var html = "<table>";
	html += '<h1 style="font-size:1.5vw"><center>Schedule</center></h1>'
	html += '<button type="button" style="background-color:black;color:green;width:3vw;height:3vw;font-size:2vw">+</button><br>';
	html += '<label for="fname"></label><input type="time" value="13:00" id="fname" name="fname">'
	html += '<label for="fname"></label><input type="time" value="13:30" id="fname" name="fname"><br>'
	html += '<label for="often"></label><select name="often" id="often"><option value="every">Every</option><option value="every_other">Every Other</option><option value="once_per_month">Once Per Month</option><option value="once">Once</option></select><br>'
	html += '<label for="days"></label><select name="day" id="days"><option value="monday">Monday</option><option value="tuesday">Tuesday</option><option value="wednesday">Wednesday</option><option value="thursday">Thursday</option><option value="friday">Friday</option><option value="saturday">Saturday</option><option value="sunday">Sunday</option></select><br>'
	html += '&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbspStart &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp End<br>';
	html += '<label for="fname"></label><input type="date" id="fname" name="fname">'
	html += '<label for="fname"></label><input type="date" id="fname" name="fname"><br>'

	document.getElementById("divScheduler").innerHTML = html;
}