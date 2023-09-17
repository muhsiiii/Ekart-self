<script>
    function ProductSave() {

        var Category = $('#category').val();
        var ProductName = $('#product_name').val();
        var ProductPrice = $('#product_price').val();
        var statusValue = $('input[name="status"]:checked').val();
        var FavouriteValue = $('input[name="favourite"]:checked').val();
        var ProductImage = $('#product_image').get(0).files[0];
        // alert(ProductImage);
        // return false;

        if (Category == '') {
            $('#category').focus();
            $('#category').css({
                'border': '1px solid red'
            });
            $('.categoryerror').show();
            $('.categoryerror').css('color', 'red');
            $('.categoryerror').text("choose category*");
            return false;
        } else {

            $('#category').css({
                'border': '1px solid #CCC'
            });

            $('.categoryerror').hide();
        }

        if (ProductName == '') {
            $('#product_name').focus();
            $('#product_name').css({
                'border': '1px solid red'
            });
            $('.productnameerror').show();
            $('.productnameerror').css('color', 'red');
            $('.productnameerror').text('enter product name');
            return false;
        } else {
            $('#product_name').css({
                'border': '1px solid #CCC'
            });
            $('.productnameerror').hide();
        }

        if (ProductPrice == '') {
            $('#product_price').focus().css('border', '1px solid red');
            $('.priceerror').show().css('color', 'red').text('Enter price');
            return false;
        } else if (!/^[\d]+$/.test(ProductPrice)) {
            $('#product_price').focus().css('border', '1px solid red');
            $('.priceerror').show().css('color', 'red').text('Enter a valid integer price');
            return false;
        } else if (ProductPrice.length > 6) {
            $('#product_price').focus().css('border', '1px solid red');
            $('.priceerror').show().css('color', 'red').text('Price cannot exceed 6 characters');
            return false;
        } else {
            $('#product_price').css({
                'border': '1px solid #CCC'
            });
            $('.priceerror').hide();
        }

        if (statusValue === undefined) {

            $('.statuserror').show().css('color', 'red').text('choose status*');
            return false;
        } else {
            $('.statuserror').hide();
        }

        if (FavouriteValue === undefined) {
            $('.favouriteerror').show().css('color', 'red').text('choose favourite');
        } else {
            $('.favouriteerror').hide();
        }

        data = new FormData();


        data.append('category', Category);
        data.append('name', ProductName);
        data.append('price', ProductPrice);
        data.append('status', statusValue);
        data.append('favourite', FavouriteValue);
        data.append('pimage', $('#product_image')[0].files[0]);
        data.append('_token', '{{ csrf_token() }}');
        $.ajax({

            type: "POST",
            url: "/product-save",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {
                    Swal.fire({
                        title: 'Product Saved',
                        // text: "You won't be able to revert this!",
                        icon: 'success',
                        // showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = window.location.href;
                        }
                    })
                }
            }
        })
    }

    function ProductDelete(pid) {
        data = new FormData();

        data.append('pid', pid);
        data.append('_token', '{{ csrf_token() }}');

        Swal.fire({
            title: 'Do You Want To Delete..??',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({

                    type: "POST",
                    url: "/product-delete",
                    data: data,
                    dataType: "json",
                    contentType: false,
                    //cache: false,
                    processData: false,

                    success: function(data) {
                        if (data['success']) {

                            Swal.fire({
                                title: 'Product Deleted SuccessFully',
                                // text: "You won't be able to revert this!",
                                icon: 'success',
                                // showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = window.location.href;
                                }
                            })
                        }
                    }
                })
            }
        })
    }
</script>
