<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          ink: '#16261F', inksoft: '#3D5148',
          paper: '#F2F4EE', papercard: '#FDFDFB',
          gold: '#B4863B', goldsoft: '#EFE3C8',
          forest: '#2E6E4E', forestsoft: '#DEEBE1',
          brick: '#AE4234', bricksoft: '#F3DCD8',
          line: '#D8D9CE', linestrong: '#B9BBAC',
        },
        fontFamily: {
          display: ['Fraunces', 'serif'],
          sans: ['Inter', 'sans-serif'],
          mono: ['IBM Plex Mono', 'monospace'],
        }
      }
    }
  }
</script>
</head>
<body class="m-0 p-0 text-ink font-sans antialiased bg-paper"
      style="background-image:radial-gradient(circle at 1px 1px, rgba(22,38,31,0.07) 1px, transparent 0); background-size:22px 22px; display:flex; justify-content:center">