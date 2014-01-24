<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
    <body>
        <table id="cust-table">
            <tr id="custid-1234"  data-custid="1234">
                        <td>John Smith</td>
                        <td><a href="#" data-custid="1234" class="button-delete-customer" id="button-delete-customer-1234">Delete</a></td>
            </tr>
            <tr id="custid-4598"  data-custid="4598">
                        <td>Sally Smith</td>
                        <td><a href="#" data-custid="4598" class="button-delete-customer" id="button-delete-customer-4598">Delete</a></td>
            </tr>
            <tr id="custid-7865"  data-custid="7865">
                        <td>John Doe</td>
                        <td><a href="#" data-custid="7865" class="button-delete-customer" id="button-delete-customer-7865">Delete</a></td>
            </tr>
        </table>
        <script>
            $(document).ready(function () {
                // Click handler for Row Delete buttons
                $('#cust-table a.button-delete-customer').click(function (event) {
                    var custId = $(event.target).attr('data-custid'); // Sets value equal to the CustId that the user wants to delete
                    var postUrl = "/customer/delete?id="+custId; // Posting URL for production purposes. Uncomment to use.
                    $.post(postUrl, function (data) {
                        if (data["result"] === "success") {
                            $('tr#custid-' + custId).remove();
                        }
                    });
                });
            });
        </script>
    </body>
</html>
