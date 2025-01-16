import { useState, useEffect } from "react";

const Books = () => {
  const [books, setBooks] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchBooks = async () => {
      try {
        const response = await fetch(
          `http://localhost:10063/wp-json/wp/v2/books`
        );
        const data = await response.json();
        console.log(data)
        setBooks(data);
      } catch (err) {
        setError(err.message);
      } finally {
        setLoading(false);
      }
    };

    fetchBooks();
  }, []);

  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error: {error}</p>;

  return (
    <div>
      <h1>Books</h1>
      <ul>
        {books.map((book) => (
          <li key={book.id}>
            <h2>{book.title.rendered}</h2>
            <div dangerouslySetInnerHTML={{ __html: book.content.rendered }} />
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Books;
