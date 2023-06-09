  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>
  <script>
      $(document).ready(function(){
        $(document).on('click','.add_product',function(e){
            e.preventDefault();
            

            let name = $('#name').val();
            let price = $('#price').val();

            //console.log(name+price);

            $.ajax({
              url:"{{ route('product.add') }}",
              method: 'POST',
              data: { name: name, price: price },
              success: function(res) {
                //console.log(data);
                  // handle success response
              },
              error:function(err){
                let error = err.responseJSON;
                $.each(error.errors,function(index,value){
                  $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                });
  
              }
          });
          

            
        });
      });
  </script>