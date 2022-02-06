	<!-- jQuery -->
    <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart.morris.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bs-custom-file-input.min.js') }}"></script>

    {{-- CK EDITOR --}}
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    @yield('script')

    {{-- select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script  src="{{ asset('admin/assets/js/script.js') }}"></script>
    <script  src="{{ asset('admin/assets/js/commet/custom.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: 'https://blog.eps.com.bd/wp-json/wp/v2/posts?per_page=3&orderby=id',

                success: function (data) {
                    var posts_html = '';

                    $.each(data, function (index, post) {


                        posts_html +=  '<img  src="' + post.yoast_head_json.og_image[0].url + '" alt="activity-6"></div>';
                        posts_html += '<p>' + post.yoast_head_json.twitter_misc["Written by"] + '</p>';
                        posts_html += '<a href="' + post.link + '"><h3>' + post.title.rendered + '</h3></a>';
                        posts_html += '<p>' + post.excerpt.rendered + '</p>';
                    });
                    $('#posts').html(posts_html);

                },


                error: function (request, status, error) {
                    alert(error);
                }
            });
        });
    </script>
