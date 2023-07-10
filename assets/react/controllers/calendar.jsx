import React from 'react'
import FullCalendar from '@fullcalendar/react'
import dayGridPlugin from '@fullcalendar/daygrid' // a plugin!
import timeGridPlugin from '@fullcalendar/timegrid'

export default function (props) {
  
  
  
    return (
      <FullCalendar
        plugins={[ dayGridPlugin, timeGridPlugin ]}
        locale={'es'}
        initialView = {props.vista}
        headerToolbar= {{
          left: 'prev,next today ',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        }}
        events={{
          url: props.events,
         
        }}
       
      />
    )
  
 
  
}



