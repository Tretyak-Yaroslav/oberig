<template>
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="modal-header">
            <slot name="header">
              <a class="modal-default-button" @click="$emit('close')"></a>
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              <h3 class="modal-text">Зателефонувати!</h3>
              <div class="map_info-btn" id="modal-footer">
                <button class="btn btn-red">
                  <p class="size white mr-7">
                        <i class="fa fa-asterisk fa-lg" aria-hidden="true"></i>
                    </p>
                  <span>3003 невідкладна допомога</span>
                </button>
              </div>
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              <button class="btn btn-green">
                <p class="size white mr-7">
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                </p>
                <span>+38 (044) 521-30-03 колцентр</span>
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
name: "modal"
}
</script>
