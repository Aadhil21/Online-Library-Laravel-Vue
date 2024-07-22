<template>
  <div class="flex flex-col gap-2 m-4 mt-4">
      <div v-for="book in borrowedBooks" :key="book.id" class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-4 ring-1 border-lime-500 m-1">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2 mt">{{ book.title }}</h3>
        <p class="text-gray-700 dark:text-gray-300 mb-2">{{ book.description }}</p>
        <p class="text-gray-600 dark:text-gray-400 mb-2">Genre: {{ book.genre }}</p>
        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">${{ book.price.toFixed(2) }}</p>
        <button @click="returnBook(book.id)" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
          Return
        </button>
      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      borrowedBooks: [],
      csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    };
  },
  async created() { // Loading user books
    const response = await fetch('/api/my-library');
    this.borrowedBooks = await response.json();
  },
  methods: {
    async returnBook(bookId) {
      await fetch('/api/return-book', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': this.csrfToken,
        },
        body: JSON.stringify({ book_id: bookId })
      });
      this.borrowedBooks = this.borrowedBooks.filter(book => book.id !== bookId); // Removing returned book frm the ui
    }
  }
};
</script>
