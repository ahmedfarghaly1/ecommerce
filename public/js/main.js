
function markNotificationAsRead()
{
    $.get('/notification/markAsRead');
}

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });


function change_select_data(event,action)
{
    $.ajax({
      url: '/transaction/get_received_dynamic_data',
      type: 'POST',
      data: {
        option:event.value
      },
      success: function (response) {
        if(action == 'search')
        {
          $('#department_receive_seacrh_block').empty();
          $('#department_receive_seacrh_block').append('<option disabled selected value>اختر المرسل اليه</option>')
          if(event.value==0)
          {
            $('#department_send_search_block').addClass('hidden');
            for(var i =0; i<response['managements'].length;i++)
            {
              $('#department_receive_seacrh_block').append('<option value="'+ response['managements'][i]['id']+'">'+ response['managements'][i]['manage_name'] +'</option>')
            }
          }
          else if (event.value ==1)
          {
            for(var i =0; i<response['managemnts_out'].length;i++)
            {
              $('#cityname').append('<option value="'+ response['managemnts_out'][i]['id']+'">'+ response['managemnts_out'][i]['manage_name'] +'</option>')
            }

            $('#department_send_search_block').removeClass('hidden');
            for(var i =0; i<response['managements'].length;i++)
            {
              $('#department_receive_seacrh_block').append('<option value="'+ response['managements'][i]['id']+'">'+ response['managements'][i]['manage_name'] +'</option>')
            }

          }
          else if (event.value)
          {
            $('#department_send_search_block').addClass('hidden');

            for(var i =0; i<response['employers'].length;i++)
            {
              $('#department_receive_seacrh_block').append('<option value="'+ response['employers'][i]['id']+'">'+ response['employers'][i]['name'] +'</option>')
            }
          }
        }
        else
        {
          $('#department_receive_selection').empty();
          $('#department_receive_selection').append('<option disabled selected value>اختر المرسل اليه</option>')
          if(event.value==0)
          {
            $('#department_send_div').addClass('hidden');
            for(var i =0; i<response['managements'].length;i++)
            {
              $('#department_receive_selection').append('<option value="'+ response['managements'][i]['id']+'">'+ response['managements'][i]['manage_name'] +'</option>')
            }
          }
          else if (event.value ==1)
          {
            for(var i =0; i<response['managemnts_out'].length;i++)
            {
              $('#cityname').append('<option value="'+ response['managemnts_out'][i]['id']+'">'+ response['managemnts_out'][i]['manage_name'] +'</option>')
            }

            $('#department_send_div').removeClass('hidden');
            for(var i =0; i<response['managements'].length;i++)
            {
              $('#department_receive_selection').append('<option value="'+ response['managements'][i]['id']+'">'+ response['managements'][i]['manage_name'] +'</option>')
            }

          }
          else if (event.value)
          {
            $('#department_send_div').addClass('hidden');

            for(var i =0; i<response['employers'].length;i++)
            {
              $('#department_receive_selection').append('<option value="'+ response['employers'][i]['id']+'">'+ response['employers'][i]['name'] +'</option>')
            }
          }
        }


      }
      });
}

function reply_need(transaction_id)
{
  $.ajax({
    url: '/transaction/reply_need',
    type: 'POST',
    data: {
      transaction_id:transaction_id
    },
    success: function (response)
    {
        alert('تم بنجاح')
        console.log(response['id']);
    }

  });
}
  function send_transaction(transaction_id)
  {
    $.ajax({
      url: '/transaction/send_transaction_ajax',
      type: 'POST',
      data: {
        transaction_id:transaction_id
      },
      success: function (response)
      {
          alert('تم التوجيه بنجاح ')
          console.log(response['id']);


          $("#nav").load(location.href + " #nav");


      }
  });
}

function create_reply(transaction_id)
{
  path = window.location.href;
  key   = "/notification";
if(path.indexOf(key) > -1)
  {
    alert(window.location.href);
    $.get('/adminpanel_ar/Transactions/in/create');
    alert('done');
  }
$('html, body').animate({ scrollTop: 0 }, 'slow');
$('#box_title').html('انشاء صادر');
if($('#create_reply').val())
  {
    $('#create_reply').val(transaction_id);
  }
  else
  {
    $('#form_create_content').append('<input id="create_reply" name="create_reply" type="hidden" value="'+ transaction_id +'">');
  }
}
function highlight_specific_transaction(id)
{
  alert(id);
}
