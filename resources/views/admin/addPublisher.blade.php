<div class="section__title my-10 section__title-primogemes">
    <span>Добавление издательства</span>
</div>
<form action="/addPublishers" id="AddPublisher-form" class="my-10" method="POST">
    @csrf
    <div class="mb-5 text-center">
        <input type="text" name="name" placeholder="Название издательства"
            class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        <span
            class="text-danger w-[50%] mx-auto my-4 error-text name_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

    </div>

    <div>
        <input type="submit" value="Добавить"
            class="hover:shadow-form block mx-auto rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
    </div>
</form>


<script>
    $(function() {
    $('#AddPublisher-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function(){
                $('.error-text').hide();
            },
            success:function(data){
                if (data.success) {
                    window.location.href = '/';
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                console.log(errors)
                $('.name_error').text(errors.name ? errors.name[0] : '');
                $('.name_error').css('display', 'flex');
            }
        });
        return false;
    });
});
</script>