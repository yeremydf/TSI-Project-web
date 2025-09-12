echo "🚀 Iniciando instalación del proyecto Laravel..."

# Verificar si composer está instalado
if ! [ -x "$(command -v composer)" ]; then
  echo "❌ Composer no está instalado. Instálalo antes de continuar."
  exit 1
fi

# Verificar si npm está instalado
if ! [ -x "$(command -v npm)" ]; then
  echo "❌ NPM no está instalado. Instálalo antes de continuar."
  exit 1
fi

# Instalar dependencias de PHP
echo "📦 Instalando dependencias de PHP..."
composer install

# Instalar dependencias de JS
echo "📦 Instalando dependencias de JavaScript..."
npm install && npm run build

# Configurar archivo .env
if [ ! -f ".env" ]; then
  echo "⚙️ Copiando archivo .env.example a .env"
  cp .env.example .env
else
  echo "⚙️ Archivo .env ya existe, se mantiene."
fi

# Generar clave de la aplicación
echo "🔑 Generando APP_KEY..."
php artisan key:generate

# Ejecutar migraciones y seeders
echo "🗄️ Ejecutando migraciones y seeders..."
php artisan migrate --seed

echo "✅ Proyecto instalado correctamente."
echo "👉 Levanta el servidor con: php artisan serve"