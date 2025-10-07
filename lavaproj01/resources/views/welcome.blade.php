<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Netflix Clone Simple</title>
<style>
  body { margin:0; font-family: Arial, sans-serif; background:#111; color:#fff; }
  header { padding: 16px; background: #e50914; font-weight: bold; font-size: 24px; }
  .movie-grid { 
    display: grid; 
    grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); 
    gap: 16px; 
    padding: 16px;
  }
  .movie-card { 
    background:#222; border-radius: 8px; padding: 10px; 
    cursor: pointer; 
    transition: transform 0.2s ease;
  }
  .movie-card:hover { transform: scale(1.05); }
  .movie-card img {
    width: 100%; border-radius: 6px;
  }
  .movie-title {
    font-weight: bold; margin-top: 8px;
  }
  .player-overlay {
    position: fixed;
    top:0; left:0; right:0; bottom:0;
    background: rgba(0,0,0,0.9);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
  }
  .player-overlay video {
    max-width: 90vw;
    max-height: 70vh;
    border-radius: 8px;
  }
  .close-btn {
    margin-top: 12px;
    background: #e50914;
    border:none;
    color:#fff;
    padding: 8px 16px;
    cursor: pointer;
    font-weight: bold;
    border-radius: 4px;
  }
</style>
</head>
<body>

<header>My Netflix Clone</header>
<div id="root"></div>

<!-- React & ReactDOM CDN -->
<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

<script>
const e = React.createElement;
const { useState } = React;

// Contoh data film (ganti URL video dengan yang kamu punya)
const movies = [
  {
    id: 1,
    title: "Sample Movie",
    thumbnail: "https://picsum.photos/id/1011/300/180", 
    videoUrl: "https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm"
  },
  {
    id: 2,
    title: "Adventure Movie",
    thumbnail: "https://picsum.photos/id/1012/300/180", 
    videoUrl: "https://interactive-examples.mdn.mozilla.net/media/cc0-videos/bee.webm"
  }
];

function App(){
  const [playingMovie, setPlayingMovie] = useState(null);

  return e(React.Fragment, null,
    e('div', {className:'movie-grid'},
      movies.map(m => e('div', {key: m.id, className:'movie-card', onClick: () => setPlayingMovie(m)},
        e('img', {src: m.thumbnail, alt: m.title}),
        e('div', {className:'movie-title'}, m.title)
      ))
    ),
    playingMovie && e('div', {className:'player-overlay'},
      e('video', {controls: true, autoPlay: true, src: playingMovie.videoUrl}),
      e('button', {className:'close-btn', onClick: () => setPlayingMovie(null)}, 'Close')
    )
  );
}

const domContainer = document.getElementById('root');
ReactDOM.createRoot(domContainer).render(e(App));
</script>

</body>
</html>
