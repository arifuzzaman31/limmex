<template>
	
	<div class="container">


		<div class="row">
			<div class="col-xl-6 offset-xl-3 text-center">
				<div class="section-title color-white mb-45">
					<h4 class="text-uppercase mb-20">contact us</h4>
					<h1>Get In Touch</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" v-if="errors">

				<div class="form-group">

					<div class="alert alert-danger">
						<ul>
							<li v-for="error in errors">{{ error[0] }}</li>
						</ul>
					</div>

				</div>

			</div>

		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="contact-form">
					<form @submit.prevent="send()" id="contactForm">
						<div class="row  mt-30">
							<div class="col-xl-6">
								<div class="form-element">
									<i class="fa fa-user"></i>
									<input type="text" v-model="form.name" id="name" class="name" placeholder="Enter Your Name">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-element">
									<i class="fa fa-envelope"></i>
									<input type="email" v-model="form.email" id="email" class="email" placeholder="Enter Your Email">
								</div>
							</div>
						</div>
						<div class="row  mt-30">
							<div class="col-xl-6">
								<div class="form-element">
									<i class="fa fa-phone"></i>
									<input type="tel" v-model="form.phone" id="phone" class="phone" placeholder="Your Phone Number">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="form-element">
									<i class="zmdi zmdi-edit"></i>
									<input type="text" v-model="form.subject" id="subject" class="subject" placeholder="Your Subject">
								</div>
							</div>
						</div>
						<div class="row  mt-30">
							<div class="col-xl-12">
								<div class="form-element">
									<i class="fa fa-edit"></i>
									<textarea name="message" v-model="form.message" id="message" placeholder="Write Your Message"></textarea>
								</div>
							</div>
						</div>
						<div class="row  mt-30">
							<div class="col-xl-12 text-center">
								<div class="form-element">
									<div class="heuse-hero-btn">
										<button type="submit" class="btn btn-filled btn-grad-color" id="contact-form">Send Message</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>


		</div>

        				<!-- 	<span
					class="error"
					v-if="(errors.hasOwnProperty('user_message'))"
					>{{ (errors.hasOwnProperty('user_message')) ? errors.user_message[0] :'' }}</span> -->
				</div>


			</template>

			<script>

				export default {

					data(){

						return {

							form : {

								name : '',
								email : '',
								phone : '',
								subject : '',
								message : ''

							},

							errors : null,

							url : base_url,

						}
					},	

					methods : {

						send(){


							axios.post(base_url+'contact',this.form)
							.then(response => {

								if(response.data.status === 'success'){



									this.resetForm();
								}

								Swal.fire({
									position: 'top-end',
									type: response.data.status,
									title: response.data.message,
									showConfirmButton: false,
									timer: 1500
								});

							})
							.catch(error => {

								if(error.response.status === 422){

									Swal.fire("Oops", "please fill the form by correct data!", "error");
									this.errors = error.response.data.errors;   

								}





							})


						},


						resetForm(){

							this.form = {

								name : '',
								email : '',
								phone : '',
								subject : '',
								message : ''

							};


							this.errors = null;



						}

					}


				}

			</script>