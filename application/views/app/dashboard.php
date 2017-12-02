<!-- ======================================
Main Dashboard
===========================================-->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 box first">
      <h4>Total Expense</h4>
      <p>Rs.</p>
    </div>
    <div class="col-md-3 box second">
      <h4>Total Income</h4>
      <p>Rs.</p>
    </div>
    <div class="col-md-3 box third">
      <h4>Spent</h4>
      <p>Rs.</p>
    </div>
    <div class="col-md-3 box fourth">
      <h4>Remaining</h4>
      <p>Rs.</p>
    </div>
  </div>
  <div class="row margin">
    <div class="col-md-4">
      <div class="flipper">
        <div class="front">
          <div id="time-widget" class="outer-square setter time">
            <div id="do-time"></div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="back">
        <div class="calendar-wrapper">
          <button id="btnPrev" type="button">Prev</button>
          <button id="btnNext" type="button">Next</button>
          <div id="divCal"></div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 text-center">
      <div class="card card-user">
        <div class="image">
          <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
        </div>
        <div class="content">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="<?php echo ASSETS_URL ?>images/face-1.jpg" alt="...">
              <h4 class="title">Mike Andrew<br>
              <small>michael24</small>
              </h4>
            </a>
          </div>
          <p class="user-description text-center"> "Lamborghini Mercy <br>
            Your chick she so thirsty <br>
            I'm in that two seat Lambo"
          </p>
        </div>
        
      </div>
    </div>
  </div>
  <div class="row margin">
    <div class="col-md-12 text-center">
      <div id="agenda-container" class="agenda">
        <h1>My Expense Agenda</h1>
        <input type="text" id="eventName" placeholder="Enter the title of your event here..">
        <button id="mainButton" onclick="eventList.enterName()">ADD A NEW EVENT</button>
      <ul class="call"></ul>
      <p>Use (x) button to delete your event, (i) button to toggle its importance and prevent deletion. Insert a description for your event if you like and then press (+) to add it.</p>
    </div>
  </div>
  
</div>
<div class="row margin">
  
  <div class="col-md-12 text-center">
    Event Calender
  </div>
</div>
</div>

<!-- ======================================
Main Dashboard
===========================================-->