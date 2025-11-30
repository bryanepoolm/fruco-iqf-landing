<script setup lang="ts">
import { ref } from 'vue';

const form = ref({
  name: '',
  email: '',
  message: ''
});

const status = ref<'idle' | 'sending' | 'success' | 'error'>('idle');
const errorMessage = ref('');

const submitForm = async () => {
  status.value = 'sending';
  errorMessage.value = '';

  try {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('email', form.value.email);
    formData.append('message', form.value.message);

    const response = await fetch('/send-mail.php', {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      status.value = 'success';
      form.value = { name: '', email: '', message: '' };
    } else {
      status.value = 'error';
      errorMessage.value = result.message || 'Hubo un error al enviar el mensaje.';
    }
  } catch (e) {
    status.value = 'error';
    errorMessage.value = 'Error de conexión. Por favor intente nuevamente.';
  }
};
</script>

<template>
  <section id="contacto" class="py-20 bg-fruco-light relative">
    <div class="max-w-4xl mx-auto px-4">
      <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="grid md:grid-cols-5">
          <div class="md:col-span-2 bg-fruco-green-dark p-10 text-white flex flex-col justify-between relative overflow-hidden">
            <div class="relative z-10">
              <h2 class="text-3xl font-bold mb-6">Contáctanos</h2>
              <p class="mb-8 text-fruco-light/90">
                Estamos listos para atender tus requerimientos. Escríbenos y nos pondremos en contacto a la brevedad.
              </p>
              
              <div class="space-y-4">
                <div class="flex items-center space-x-3">
                  <span class="text-xl">📧</span>
                  <a href="mailto:sales.connection@frucoiqfcorporation.mx" class="hover:text-fruco-yellow transition-colors text-sm break-all">
                    sales.connection@frucoiqfcorporation.mx
                  </a>
                </div>
              </div>
            </div>
            
            <!-- Decorative circles -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
          </div>

          <div class="md:col-span-3 p-10">
            <form @submit.prevent="submitForm" class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input 
                  type="text" 
                  id="name" 
                  v-model="form.name" 
                  required
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fruco-green focus:border-transparent outline-none transition-all"
                  placeholder="Tu nombre completo"
                />
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                <input 
                  type="email" 
                  id="email" 
                  v-model="form.email" 
                  required
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fruco-green focus:border-transparent outline-none transition-all"
                  placeholder="tu@correo.com"
                />
              </div>

              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                <textarea 
                  id="message" 
                  v-model="form.message" 
                  required
                  rows="4"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-fruco-green focus:border-transparent outline-none transition-all"
                  placeholder="¿En qué podemos ayudarte?"
                ></textarea>
              </div>

              <button 
                type="submit" 
                :disabled="status === 'sending'"
                class="w-full py-3 px-6 bg-fruco-green hover:bg-fruco-green-dark text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed"
              >
                <span v-if="status === 'sending'">Enviando...</span>
                <span v-else>Enviar Mensaje</span>
              </button>

              <div v-if="status === 'success'" class="p-4 bg-green-50 text-green-700 rounded-lg text-center">
                ¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.
              </div>

              <div v-if="status === 'error'" class="p-4 bg-red-50 text-red-700 rounded-lg text-center">
                {{ errorMessage }}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
