<template>
    <div
        class="page-wrapper"
        id="main-wrapper"
        data-theme="blue_theme"
        data-layout="vertical"
        data-sidebartype="full"
        data-sidebar-position="fixed"
        data-header-position="fixed"
    >
        <sidebar />
        <div class="body-wrapper">
            <navbar />
            <div class="container-fluid">
                <div
                    class="card bg-light-info shadow-none position-relative overflow-hidden"
                >
                    <div class="card-body px-4 py-3">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h4 class="fw-semibold mb-8">Kyc Details</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <router-link
                                                class="text-muted"
                                                :to="{ name: 'admin_home' }"
                                                >Dashboard</router-link
                                            >
                                        </li>
                                        <li
                                            class="breadcrumb-item"
                                            aria-current="page"
                                        >
                                            Kyc Details
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-3">
                                <div class="text-center mb-n5">
                                    <img
                                        :src="url + 'admin/images/ChatBc.png'"
                                        alt=""
                                        class="img-fluid mb-n4"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Details</h4>

                                <ul class="list-unstyled mb-0">
                                    <li
                                        class="d-flex align-items-center gap-3 mb-4"
                                    >
                                        <div class="text-dark fs-4">
                                            Complete Address :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.complete_address }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-4"
                                    >
                                        <div class="text-dark fs-4">
                                            Zip Code :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.postal_code }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-4"
                                    >
                                        <div class="text-dark fs-4">
                                            PAN Number :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.pan_no }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-4"
                                    >
                                        <div class="text-dark fs-4">
                                            Account Type :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            Currrent
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-4"
                                    >
                                        <div class="text-dark fs-4">
                                            Account Holder Name :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.account_name }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-2"
                                    >
                                        <div class="text-dark fs-4">
                                            Account Number :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.account_no }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-2"
                                    >
                                        <div class="text-dark fs-4">
                                            Account IFSC :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.ifsc }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-2"
                                    >
                                        <div class="text-dark fs-4">
                                            Bank Name :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.bank_name }}
                                        </h6>
                                    </li>
                                    <li
                                        class="d-flex align-items-center gap-3 mb-2"
                                    >
                                        <div class="text-dark fs-4">
                                            Bank Address :
                                        </div>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            {{ details.bank_address }}
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Update Status</h4>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="radio"
                                            v-model="form.status"
                                            value="Verified"
                                        />
                                        <label
                                            for=""
                                            class="badge bg-light-success text-success fw-semibold fs-2"
                                            >Verifed</label
                                        >
                                    </div>
                                    <div class="col">
                                        <input
                                            type="radio"
                                            v-model="form.status"
                                            value="Rejected"
                                        />
                                        <label
                                            for=""
                                            class="badge bg-light-danger text-danger fw-semibold fs-2"
                                            >Rejected</label
                                        >
                                    </div>
                                    <div class="col">
                                        <input
                                            type="radio"
                                            v-model="form.status"
                                            value="Pending"
                                        />
                                        <label
                                            for=""
                                            class="badge bg-light-warning text-warning fw-semibold fs-2"
                                            >Pending</label
                                        >
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button
                                        class="btn btn-success"
                                        type="button"
                                        data-bs-toggle="modal" data-bs-target="#statusModal">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">ID Proof</h4>
                                <div class="text-center">
                                    <img :src="this.url+details.id_proof" alt="" width="150">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Address Proof</h4>
                                <div class="text-center">
                                    <img :src="this.url+details.address_proof" alt="" width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">PAN Card</h4>
                                 <div class="text-center">
                                    <img :src="this.url+details.pan_card" alt="" width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Cheque Book</h4>
                                <div class="text-center">
                                    <img :src="this.url+details.cheque_book" alt="" width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Photo</h4>
                                <div class="text-center">
                                    <img :src="this.url+details.image" alt="" width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Signature</h4>
                                <div class="text-center">
                                    <img :src="this.url+details.signature" alt="" width="150">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="statusModalLabel">Remarks</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea v-modal="form.remarks" rows="3" class="form-control" placeholder="Enter Remarks"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="updateStatus">Submit</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import navbar from "./header.vue";
import sidebar from "./sidebar.vue";

export default {
    components: {
        navbar,
        sidebar,
    },
    data() {
        return {
            url: process.env.MIX_APP_URL,
            api_url: process.env.MIX_API_URL,
            message: {
                error: false,
                success: false,
            },
            form: {
                status: "Pending",
                remarks:"",
                
            },
            details: "",
        };
    },

    created() {
        this.kycDetails();
    },

    methods: {
        kycDetails() {
            axios
                .get(this.api_url + "kyc_details/" + this.$route.params.id, {
                    headers: {
                        Authorization: `Bearer ${localStorage.token}`,
                    },
                })
                .then((res) => {
                    console.log(res);
                    this.details = res.data.kyc;
                })
                .catch((err) => {
                    this.$toaster.error(err.response.data.message);
                    console.log(err);
                });
        },
        updateStatus(){
            axios.post(this.api_url+'update_kyc/'+this.$route.params.id,
            this.form,{
                headers: {
                        Authorization: `Bearer ${localStorage.token}`,
                    },
            }).then(res=>{
                this.$toaster.success(res.data.message);
            }).catch(err=>{
                this.$toaster.error(err.response.data.message);
            });
        }
    },
};
</script>
