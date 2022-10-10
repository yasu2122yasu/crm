import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

export default await (async () => {
const __VLS_setup = async () => {
const errors = computed(() => usePage().props.value.errors);
const hasErrors = computed(() => Object.keys(errors.value).length > 0);
const __VLS_Component = (await import('vue')).defineComponent({
setup() {
return {};
}
});
function __VLS_template() {
// @ts-ignore
[hasErrors, errors];
return {};
}
return {} as typeof __VLS_Component;
};
return await __VLS_setup();
})();
