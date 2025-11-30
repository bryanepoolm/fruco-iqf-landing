<script setup lang="ts">
</script>

<template>
  <section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background with blur and overlay -->
    <div class="absolute inset-0 z-0">
      <img 
        src="/assets/persona-subiendo-mercancia.jpeg" 
        alt="Fruco Background" 
        class="w-full h-full object-cover opacity-90"
      />
      <div class="absolute inset-0 bg-gradient-to-b from-white/60 via-white/40 to-white/90 backdrop-blur-[2px]"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
      <div class="mb-8 animate-fade-in-down">
        <img 
          src="/assets/logo-fruco-fondo-blanco.jpeg" 
          alt="Fruco Logo" 
          class="h-32 md:h-48 mx-auto rounded-full shadow-2xl border-4 border-fruco-yellow/50 hover:scale-105 transition-transform duration-500"
        />
      </div>
      
      <h1 class="text-5xl md:text-7xl font-bold text-fruco-green-dark mb-6 tracking-tight animate-fade-in-up">
        Calidad y Frescura <br/>
        <span class="text-fruco-yellow text-transparent bg-clip-text bg-gradient-to-r from-fruco-yellow to-orange-500">
          IQF Mexicana
        </span>
      </h1>
      
      <p class="text-xl md:text-2xl text-gray-700 mb-10 max-w-2xl mx-auto font-light animate-fade-in-up delay-100">
        Expertos en producción y exportación de frutas congeladas con los más altos estándares de calidad.
      </p>
      
      <div class="flex flex-col md:flex-row gap-4 justify-center animate-fade-in-up delay-200">
        <a 
          href="#contacto" 
          class="px-8 py-4 bg-fruco-green hover:bg-fruco-green-dark text-white rounded-full font-semibold text-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
        >
          Contáctanos
        </a>
        <a 
          href="#productos" 
          class="px-8 py-4 bg-white/80 hover:bg-white text-fruco-green-dark border-2 border-fruco-green/20 rounded-full font-semibold text-lg shadow-md hover:shadow-lg transition-all duration-300 backdrop-blur-sm"
        >
          Nuestros Productos
        </a>
      </div>
    </div>

    <!-- Decorative shapes -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-fruco-yellow/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-fruco-green/20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
  </section>
</template>

<style scoped>
.animate-fade-in-down {
  animation: fadeInDown 1s ease-out;
}

.animate-fade-in-up {
  animation: fadeInUp 1s ease-out forwards;
  opacity: 0;
}

.delay-100 {
  animation-delay: 0.2s;
}

.delay-200 {
  animation-delay: 0.4s;
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
