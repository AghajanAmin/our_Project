<x-layout>
    <h1 class="title">فورم ثبت نام کارمندان</h1>

    <div class="mx-auto max-w-screen-sm card bg-white shadow-md p-6 rounded-lg mt-8">
        <form action="{{ route('register') }}" method="post">
            @csrf

            {{-- name --}}
            <div class="mb-8">
                <label for="name" class="block font-semibold mb-2">اسم</label>
                <input type="text" name="name" value="{{ old('name') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('name') ring-red-500 @enderror">
            </div>

            {{--LastName--}}
            <div class="mb-8">
                <label for="LastName" class="block font-semibold mb-2">تخلص</label>
                <input type="text" name="LastName" value="{{ old('LastName') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('LastName') ring-red-500 @enderror">
            </div>

            {{--FatherName--}}
            <div class="mb-8">
                <label for="FatherName" class="block font-semibold mb-2">ولد</label>
                <input type="text" name="FatherName" value="{{ old('FatherName') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('FatherName') ring-red-500 @enderror">
            </div>

            {{--Bast--}}
            <div class="mb-8">
                <label for="Bast" class="block font-semibold mb-2">بست</label>
                <input type="text" name="Bast" value="{{ old('Bast') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('Bast') ring-red-500 @enderror">
            </div>

            {{--BastTitle--}}
            <div class="mb-8">
                <label for="BastTitle" class="block font-semibold mb-2">عنوان بست</label>
                <input type="text" name="BastTitle" value="{{ old('BastTitle') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('BastTitle') ring-red-500 @enderror">
            </div>
            {{--LastName--}}
            <div class="mb-8">
                <label for="LastName" class="block font-semibold mb-2">تخلص</label>
                <input type="text" name="LastName" value="{{ old('LastName') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('LastName') ring-red-500 @enderror">
            </div>
            {{-- Email --}}
            <div class="mb-8">
                <label for="email" class="block font-semibold mb-2">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('email') ring-red-500 @enderror">
                @error('email')
                <p class="error text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-8">
                <label for="password" class="block font-semibold mb-2">Password</label>
                <input type="password" name="password" class="input w-full px-3 py-2 border border-gray-300 rounded-lg @error('password') ring-red-500 @enderror">
                @error('password')
                <p class="error text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="mb-8">
                <label for="password_confirmation" class="block font-semibold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input w-full px-3 py-2 border border-gray-300 rounded-lg">
            </div>

            {{-- Register Button --}}
            <button class="btn w-full bg-slate-900 text-white py-2 rounded-lg hover:bg-slate-700 transition duration-300">Register</button>
        </form>
    </div>

</x-layout>
