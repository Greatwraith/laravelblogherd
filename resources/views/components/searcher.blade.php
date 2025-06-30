<div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
  <div class="mx-auto max-w-screen-md sm:text-center">
    <form action="/posts" method="GET">
        @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
      <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
        
        <!-- Search Input -->
        <div class="relative w-full">
          <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900">Search</label>
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <input 
            type="search" 
            id="search" 
            name="search"
            placeholder="Search Article"
            autocomplete="off"
            class="block w-full p-3 pl-10 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg sm:rounded-none sm:rounded-l-lg focus:ring-blue-500 focus:border-blue-500"
          >
        </div>

        <!-- Search Button -->
        <div>
          <button 
            type="submit" 
            class="w-full py-3 px-5 text-sm font-medium text-white text-center bg-blue-600 border border-blue-600 rounded-lg cursor-pointer sm:rounded-none sm:rounded-r-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300"
          >
            Search
          </button>
        </div>
        
      </div>
    </form>
  </div>
</div>
