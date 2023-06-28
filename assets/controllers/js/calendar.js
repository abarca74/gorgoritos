// assets/js/calendar/index.js
import { Calendar } from "@fullcalendar/core";
import interactionPlugin from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";




//import "./index.css"; // this will create a calendar.css file reachable to 'encore_entry_link_tags'

window.onload = () => {
  let calendarEl = document.getElementById("calendar-holder");
  let url = "/home"
  //let { eventsUrl } = calendarEl.dataset;


  let calendar = new Calendar(calendarEl, {
    plugins: [ interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin ],
    initialView: 'dayGridMonth',
    locale:'es',
   
    editable:true,
    headerToolbar:{
      start: 'prev,next today',
      center: 'title',
      end: 'dayGridMonth, timeGridWeek'
    },
    events: data
    
  
 
  });

  calendar.render();
 
};
$('#hola').html('Hola campeón')



