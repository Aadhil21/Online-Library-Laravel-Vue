<template>
  <div class="m-1 flex flex-row">
    <input class='basis-1/4 font-semibold text-l text-gray-800 dark:text-gray-900 leading-tight m-4 rounded-md' 
           v-model="searchTitle" 
           placeholder="Search by title">
    <input class='basis-1/4 font-semibold text-l text-gray-800 dark:text-gray-900 leading-tight m-4 rounded-md' 
           v-model="searchDescription" 
           placeholder="Search by description">
    <input class='basis-1/4 font-semibold text-l text-gray-800 dark:text-gray-900 leading-tight m-4 rounded-md' 
           v-model="searchGenre" 
           placeholder="Search by genre">
    <button class='basis-1/4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 m-4 rounded-md'
            @click="searchBooks">Search</button>
  </div>

  <div class="flex flex-col gap-2 m-4 mt-0">
    <div v-for="book in books" :key="book.id" class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-4 ring-1 border-lime-500 m-1">
      <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">{{ book.title }}</h3>
      <p class="text-gray-700 dark:text-gray-300 mb-2">{{ book.description }}</p>
      <p class="text-gray-600 dark:text-gray-400 mb-2">Genre: {{ book.genre }}</p>
      <p class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">${{ book.price.toFixed(2) }}</p>
      <button @click="borrowBook(book.id)" 
              class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
        Borrow
      </button>
    </div>
  </div>

  <div class="flex justify-between m-4">
    <button :disabled="currentPage === 1" @click="prevPage" 
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold mx-1 py-2 px-4 rounded-md">
      &laquo; Previous
    </button>
    <span class="text-gray-300">Page {{ currentPage }} of {{ totalPages }}</span>
    <button :disabled="currentPage === totalPages" @click="nextPage" 
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold mx-1 py-2 px-4 rounded-md">
      Next &raquo;
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchTitle: '',
      searchDescription: '',
      searchGenre: '',
      books: [],
      currentPage: 1,
      totalPages: 1,
    };
  },
  async created() {
    await this.loadBooks();
  },
  methods: {
    async loadBooks(page = 1) {
      try {
        const query = `?page=${page}${this.buildQuery()}`;
        const response = await fetch(`/api/books${query}`);
        if (!response.ok) throw new Error('Bad Network response');
        const data = await response.json();
        this.books = data.data || [];
        this.currentPage = data.current_page || 1;
        this.totalPages = data.last_page || 1;
      } catch (error) {
        console.error('Error loading books:', error);
      }
    },
    buildQuery() {
      let query = '';
      if (this.searchTitle) {
        query += `&title=${this.searchTitle}`;
      }
      if (this.searchDescription) {
        query += `&description=${this.searchDescription}`;
      }
      if (this.searchGenre) {
        query += `&genre=${this.searchGenre}`;
      }
      return query;
    },
    async searchBooks() {
      await this.loadBooks(1);
    },
    async prevPage() {
      if (this.currentPage > 1) {
        await this.loadBooks(this.currentPage - 1);
      }
    },
    async nextPage() {
      if (this.currentPage < this.totalPages) {
        await this.loadBooks(this.currentPage + 1);
      }
    },
    async borrowBook(bookId) {
      try {
        await fetch('/api/borrow', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({ book_id: bookId }),
        });
      } catch (error) {
        console.error('Error borrowing book:', error);
      }
    },
  },
};
</script>
