</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>{{ __('Copyright © 2023 All Rights Reserved') }} <a href="https://www.linkedin.com/in/amr-gamal5/">Amr Gamal</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

{{-- <script src="{{ asset('admin/dist/js/jquery.js') }}"></script> --}}

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

@yield('page_script')

<script src="{{ asset('admin/dist/js/slimselect.min.js') }}"></script>
<script>
    /* Multiple */


    let singleSelect = document.querySelectorAll('select:not([multiple]'),
    multipleSelect = document.querySelector('select[multiple]')


    if (singleSelect) {
        document.querySelectorAll('select:not([multiple]').forEach(e => {
            new SlimSelect({
                select: e,
            });
        })
    }

    if (multipleSelect) {
        new SlimSelect({
            select: 'select[multiple]'
        });
    }

    function showPrev(event , input) {

        let element = document.querySelector('._img');

        if (event.target.files.length == 1) {
            event.target.files.length > 0 ? element.src = URL.createObjectURL(event.target
                .files[0]) : '';
        }else if(event.target.files.length > 1){
            element.innerHTML = ''
            // event.target.files.forEach((e,i) => {
            //     element.innerHTML += `
            //         <img height="250px" class="" src="${URL.createObjectURL(event.target.files[i])}" alt="">
            //     `
            // })
            for (let i = 0; i < event.target.files.length; i++) {
                element.innerHTML += `
                    <img width="200px" class="" src="${URL.createObjectURL(event.target.files[i])}" alt="">
                `
            }
        }






            input.nextElementSibling.style.borderColor = '#24cf6064'
            input.nextElementSibling.style.color = '#24cf6064'
            // input.nextSibling.style.borderColor = '#24cf6064'
    }


    let numOfChild = document.querySelectorAll('.numOfChild');
    numOfChild.forEach(e => {
        e.innerText = e.closest('a').nextElementSibling.children.length
    })



</script>
</body>
</html>
