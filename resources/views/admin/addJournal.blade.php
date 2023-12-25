<div class="section__title my-10 section__title-primogemes">
    <span>Добавление жанра</span>
</div>
<form action="/AddJournal" id="addJournal-form" class="my-10" method="POST">
    @csrf
    <div class="mb-5 text-center">
        <input type="text" name="name" placeholder="Название жанра"
            class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            <span class="text-danger w-[50%] mx-auto my-4 error-text name_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>
    </div>

    <div>
        <input type="submit" value="Добавить"
            class="hover:shadow-form block mx-auto rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
    </div>
</form>

<script>
    
</script>