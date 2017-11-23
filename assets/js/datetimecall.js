setInterval(function(){
  getId("do-time").innerHTML = formatTime();
},1000);

function formatTime() {

  var d = new Date(),
      minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
      hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
      ampm = d.getHours() >= 12 ? 'pm' : 'am',
      months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

  return '<h2>'+hours+'<span>:'+minutes+'</span></h2><small>'+ampm+'</small><h3>'+days[d.getDay()]+'<span>'+months[d.getMonth()]+' '+d.getDate()+'</span>'+d.getFullYear()+'</h3>';
}

var Cal = function(divId) {

  this.divId = divId;

  this.DaysOfWeek = [ 'Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa' ];

  this.Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

  var d = new Date();

  this.currMonth = d.getMonth();
  this.currYear = d.getFullYear();
  this.currDate = d.getDate();
  this.currD = d.getDay();

};

Cal.prototype.nextMonth = function() {
  if ( this.currMonth == 11 ) {
    this.currMonth = 0;
    this.currYear = this.currYear + 1;
  }
  else {
    this.currMonth = this.currMonth + 1;
  }
  this.showcurr();
};

Cal.prototype.previousMonth = function() {
  if ( this.currMonth == 0 ) {
    this.currMonth = 11;
    this.currYear = this.currYear - 1;
  }
  else {
    this.currMonth = this.currMonth - 1;
  }
  this.showcurr();
};

Cal.prototype.showcurr = function() {
  this.showMonth(this.currYear, this.currMonth);
};

Cal.prototype.showMonth = function(y, m) {

  var chk = new Date();
  var chkY = chk.getFullYear();
  var chkM = chk.getMonth();

  var d = new Date()
  , firstDayOfMonth = new Date(y, m, 1).getDay()
  , lastDateOfMonth =  new Date(y, m+1, 0).getDate()
  , lastDayOfLastMonth = m == 0 ? new Date(y-1, 11, 0).getDate() : new Date(y, m, 0).getDate();


  var html = '<table>';

  html += '<thead><tr>';
  html += '<td colspan="7">' + this.Months[m] + ' ' + y + '</td>';
  html += '</tr></thead>';


  html += '<tr class="days">';
  for(var i=0; i < this.DaysOfWeek.length;i++) {
    if ( chkY == this.currYear && chkM == this.currMonth && i == this.currD ) {
      html += '<td class="today">' + this.DaysOfWeek[i] + '</td>';
    } else {
      html += '<td>' + this.DaysOfWeek[i] + '</td>';
    }
  }
  html += '</tr>';

  var i=1;
  do {

    var dow = new Date(y, m, i).getDay();

    if ( dow == 0 ) {
      html += '<tr>';
    }
    else if ( i == 1 ) {
      html += '<tr>';
      var k = lastDayOfLastMonth - firstDayOfMonth+1;
      for(var j=0; j < firstDayOfMonth; j++) {
        html += '<td class="not-current">' + k + '</td>';
        k++;
      }
    }

    if (chkY == this.currYear && chkM == this.currMonth && i == this.currDate) {
      html += '<td class="today">' + i + '</td>';
    } else {
      html += '<td class="normal">' + i + '</td>';
    }
    if ( dow == 6 ) {
      html += '</tr>';
    }
    else if ( i == lastDateOfMonth ) {
      var k=1;
      for(dow; dow < 6; dow++) {
        html += '<td class="not-current">' + k + '</td>';
        k++;
      }
    }

    i++;
  }while(i <= lastDateOfMonth);

  html += '</table>';

  document.getElementById(this.divId).innerHTML = html;
};

window.onload = function() {

  var c = new Cal("divCal");      
  c.showcurr();

  getId('btnNext').onclick = function() {
    c.nextMonth();
  };
  getId('btnPrev').onclick = function() {
    c.previousMonth();
  };
}

function getId(id) {
  return document.getElementById(id);
}