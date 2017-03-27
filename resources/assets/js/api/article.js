export default {
    destroy(id) {
        return window.axios.delete(`/article/${id}`);
    }
};